<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use App\Models\UserAssignment;
use App\Models\Submission;
use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;

class AssignmentController extends Controller
{
    public function userIndex(Request $request)
    {
        $classId = $request->query('class_id');
        $userId = auth()->id();

        $assignments = UserAssignment::when($classId, function ($query) use ($classId) {
            return $query->whereHas('assignment', function ($query) use ($classId) {
                $query->where('class_id', $classId);
            });
        })->where('user_id', $userId)->with('assignment')->get();

        return response()->json($assignments);
    }

    public function index()
    {
        $assignments = Assignment::with(['classRoom', 'submissions'])->get();
        return view('data-masters.assignments', compact('assignments'));
    }

    public function create()
    {
        $classes = ClassRoom::all();
        return view('data-masters.assignments-add', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'class_id' => 'required|exists:classes,id',
            'due_date' => 'required|date',
        ]);

        $assignment = Assignment::create($request->all());

        // Buat UserAssignment untuk setiap user di kelas
        $class = ClassRoom::find($request->class_id);
        foreach ($class->users as $user) {
            UserAssignment::create([
                'assignment_id' => $assignment->id,
                'user_id' => $user->id,
                'status' => 'assigned',
            ]);
        }

        Log::info('Assignment added: ' . $assignment);

        return redirect()->route('assignments.index')->with('success', 'Wah nambah tugas baru nich');
    }

    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->due_date = Carbon::parse($assignment->due_date); // Convert to Carbon instance
        $classes = ClassRoom::all();
        return view('data-masters.assignments-edit', compact('assignment', 'classes'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'class_id' => 'required|exists:classes,id',
            'due_date' => 'required|date',
        ]);

        // Cari assignment berdasarkan ID, jika tidak ditemukan akan mengeluarkan error 404
        $assignment = Assignment::findOrFail($id);

        // Update data assignment
        $assignment->title = $request->input('title');
        $assignment->description = $request->input('description');
        $assignment->class_id = $request->input('class_id');
        $assignment->due_date = $request->input('due_date');

        // Simpan perubahan ke database
        $assignment->save();

        // Logging untuk debugging
        Log::info('Assignment updated: ' . $assignment);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('assignments.index')->with('success', 'Wow ada perbaruan tugas nih wkwk');
    }

    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        Log::info('Assignment deleted: ' . $assignment);

        return redirect()->route('assignments.index')->with('success', 'Wah tugas berhasil dihapus!');
    }

    public function submit(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:under review,approved',
        ]);

        $userAssignment = UserAssignment::where('assignment_id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
        $userAssignment->update(['status' => $request->status]);

        $submission = Submission::where('assignment_id', $id)
            ->where('student_id', auth()->id())
            ->firstOrFail();
        $submission->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Assignment status updated.');
    }

    public function taskView()
    {
        $user = auth()->user();
        $userAssignments = UserAssignment::where('user_id', $user->id)
            ->with(['assignment.classRoom.teacher', 'assignment.submissions'])
            ->get();

        foreach ($userAssignments as $userAssignment) {
            $userAssignment->assignment->due_date = Carbon::parse($userAssignment->assignment->due_date);
        }

        return view('task.task-list', compact('userAssignments'));
    }

    public function show($encryptedId)
    {
        try {
            // Dekripsi ID untuk mendapatkan ID asli
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
            // Tangani jika ID tidak bisa didekripsi
            abort(404, "Invalid assignment identifier.");
        }

        // Cari assignment berdasarkan ID
        $assignment = Assignment::with(['classRoom.teacher', 'submissions'])->findOrFail($id);

        // Pastikan due_date adalah instance dari Carbon
        if (!($assignment->due_date instanceof Carbon)) {
            $assignment->due_date = Carbon::parse($assignment->due_date);
        }

        // Mengembalikan view dengan data assignment
        return view('task.task-details', compact('assignment'));
    }

    public function showTaskProgress()
    {
        // Asumsi user id dapat diambil dari session atau autentikasi
        $userId = auth()->id();

        // Hitung total assignments yang dimiliki user
        $totalAssignments = UserAssignment::where('user_id', $userId)->count();

        // Hitung total assignments yang berstatus 'approved'
        $approvedAssignments = UserAssignment::where('user_id', $userId)
            ->where('status', 'approved')
            ->count();

        // Hitung persentase
        $progressPercentage = $totalAssignments > 0 ? ($approvedAssignments / $totalAssignments) * 100 : 0;

        return view('index', compact('progressPercentage'));
    }
}

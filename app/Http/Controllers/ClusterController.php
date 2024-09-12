<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClusterController extends Controller
{
    public function joinClass(Request $request)
    {
        $request->validate([
            'class_code' => 'required|exists:classes,class_code',
        ]);

        // Dapatkan kelas berdasarkan kode
        $class = ClassRoom::where('class_code', $request->class_code)->first();

        // Attach user ke kelas
        $class->students()->attach(auth()->id());

        // Ambil semua assignments di kelas tersebut
        $assignments = $class->assignments;

        // Loop melalui assignments dan tambahkan ke user_assignments
        foreach ($assignments as $assignment) {
            $existingAssignment = DB::table('user_assignments')
                ->where('assignment_id', $assignment->id)
                ->where('user_id', auth()->id())
                ->first();

            if (!$existingAssignment) {
                DB::table('user_assignments')->insert([
                    'assignment_id' => $assignment->id,
                    'user_id' => auth()->id(),
                    'status' => 'assigned',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return redirect()->route('user.clusters.index')->with('success', 'Cie kamu berhasil masuk cluster dan mendapatkan tugas hehe.');
    }

    public function leaveClass($id)
    {
        $class = ClassRoom::findOrFail($id);

        // Hapus hubungan antara user dan class
        $class->students()->detach(auth()->id());

        // Hapus semua assignment yang terkait dengan class ini untuk user yang bersangkutan
        DB::table('user_assignments')
            ->where('user_id', auth()->id())
            ->whereIn('assignment_id', $class->assignments->pluck('id'))
            ->delete();

        return redirect()->route('user.clusters.index')->with('success', 'Waduh kenapa anda keluar cluster?');
    }

    public function index()
    {
        $classes = ClassRoom::with('teacher', 'students', 'assignments')
            ->withCount(['students' => function ($query) {
                $query->where('role', 'student');
            }])
            ->get();

        return view('data-masters.clusters', compact('classes'));
    }

    public function userIndex()
    {
        $user = auth()->user();

        $classes = ClassRoom::with('teacher', 'students', 'assignments')
            ->whereHas('students', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->withCount(['students' => function ($query) {
                $query->where('role', 'student');
            }])
            ->get();

        return view('clusters.clusters', compact('classes'));
    }

    public function create()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('data-masters.clusters-add', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'nullable|exists:users,id',
        ]);

        $class = new ClassRoom();
        $class->name = $request->name;
        $class->description = $request->description;
        $class->teacher_id = $request->teacher_id;
        $class->class_code = ClassRoom::generateUniqueClassCode();
        $class->created_at = now();
        $class->updated_at = now();
        $class->save();

        Log::info('Cluster added: ' . $class);

        return redirect()->route('clusters.index')->with('success', 'Keren cluster baru nich');
    }

    public function edit($id)
    {
        $class = ClassRoom::findOrFail($id);
        $teachers = User::where('role', 'teacher')->get();
        $students = $class->students()->where('role', 'student')->get();

        return view('data-masters.clusters-edit', compact('class', 'teachers', 'students'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'nullable|exists:users,id',
            'students' => 'nullable|array',
            'students.*' => 'exists:users,id'
        ]);

        $class = ClassRoom::findOrFail($id);
        $class->update($request->only(['name', 'description', 'teacher_id']));

        DB::table('class_user')->where('class_id', $class->id)->delete();
        if ($request->has('students')) {
            foreach ($request->students as $studentId) {
                DB::table('class_user')->insert([
                    'class_id' => $class->id,
                    'user_id' => $studentId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        Log::info('Cluster updated: ' . $class);

        return redirect()->route('clusters.index')->with('success', 'Wow data cluster berhasil di perbarui');
    }

    public function destroy($id)
    {
        $class = ClassRoom::findOrFail($id);

        DB::table('class_user')->where('class_id', $class->id)->delete();
        $class->delete();

        Log::info('Cluster deleted: ' . $class);

        return redirect()->route('clusters.index')->with('success', 'Yay cluster berhasil dihapus');
    }
}

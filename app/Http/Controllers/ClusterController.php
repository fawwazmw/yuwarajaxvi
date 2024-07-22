<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClusterController extends Controller
{
    public function index()
    {
        // Retrieve classes with teacher and count of students only
        $classes = ClassRoom::with('teacher')
            ->withCount(['students' => function ($query) {
                $query->where('role', 'student');
            }])
            ->get();

        // Transform data to include teacher name
        $classes = $classes->map(function ($class) {
            $class->teacher_name = $class->teacher ? $class->teacher->name : 'No SPV';
            return $class;
        });

        return view('data-masters.clusters', compact('classes'));
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
        $class->created_at = now();
        $class->updated_at = now();
        $class->save();

        Log::info('Cluster added: ' . $class);

        return redirect()->route('clusters.index')->with('success', 'Cluster added successfully.');
    }

    public function edit($id)
    {
        $class = ClassRoom::findOrFail($id);
        $teachers = User::where('role', 'teacher')->get();
        $students = $class->students()->where('role', 'student')->get(); // Fetch only students assigned to the class

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

        // Update students in class_user pivot table
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

        return redirect()->back()->with('success', 'Cluster updated successfully.');
    }

    public function destroy($id)
    {
        $class = ClassRoom::findOrFail($id);

        // Delete pivot table relations
        DB::table('class_user')->where('class_id', $class->id)->delete();

        // Delete class
        $class->delete();

        Log::info('Cluster deleted: ' . $class);

        return response()->json(['success' => 'Cluster deleted successfully.']);
    }
}

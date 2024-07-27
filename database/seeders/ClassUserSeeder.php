<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassRoom;
use App\Models\User;
use App\Models\ClassUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ClassUserSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data dalam tabel class_user agar tidak ada duplikasi
        Schema::disableForeignKeyConstraints();
        DB::table('class_user')->truncate();
        Schema::enableForeignKeyConstraints();

        // Pastikan ada setidaknya 2 ClassRooms dan 10 Students
        $requiredClassRooms = 2;
        $requiredStudents = 10;

        if (ClassRoom::count() < $requiredClassRooms) {
            ClassRoom::factory()->count($requiredClassRooms - ClassRoom::count())->create();
        }

        if (User::where('role', 'student')->count() < $requiredStudents) {
            User::factory()->count($requiredStudents - User::where('role', 'student')->count())->create([
                'role' => 'student',
            ]);
        }

        $classRooms = ClassRoom::all();
        $students = User::where('role', 'student')->get();

        // Insert 10 records using the factory
        for ($i = 0; $i < 10; $i++) {
            ClassUser::factory()->create([
                'class_id' => $classRooms->random()->id,
                'user_id' => $students->random()->id,
            ]);
        }
    }
}

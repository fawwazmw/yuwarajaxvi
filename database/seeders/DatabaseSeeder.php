<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ClassRoomSeeder::class,
            ClassUserSeeder::class,
            AssignmentSeeder::class,
            SubmissionSeeder::class,
            CommentSeeder::class,
            ProdiSeeder::class,
            ProdiUserSeeder::class,
            UserAssignmentSeeder::class,
            AnnouncementSeeder::class,
        ]);
    }
}

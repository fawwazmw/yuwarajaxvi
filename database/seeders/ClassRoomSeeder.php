<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    public function run()
    {
        \App\Models\ClassRoom::factory(10)->create();
    }
}

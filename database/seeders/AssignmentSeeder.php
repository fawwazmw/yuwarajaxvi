<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Assignment::factory(10)->create();
    }
}

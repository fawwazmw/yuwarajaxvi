<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Submission::factory(10)->create();
    }
}

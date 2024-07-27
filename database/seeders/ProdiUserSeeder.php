<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdiUserSeeder extends Seeder
{
    public function run()
    {
        \App\Models\ProdiUser::factory(10)->create();
    }
}

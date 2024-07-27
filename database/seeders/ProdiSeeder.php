<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Prodi::factory(10)->create();
    }
}

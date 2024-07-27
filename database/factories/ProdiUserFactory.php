<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdiUserFactory extends Factory
{
    protected $model = \App\Models\ProdiUser::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'prodi_id' => \App\Models\Prodi::factory(),
        ];
    }
}

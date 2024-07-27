<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class ProdiFactory extends Factory
{
    protected $model = \App\Models\Prodi::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian
        return [
            'name' => $faker->word,
        ];
    }
}

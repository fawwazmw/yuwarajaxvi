<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class AssignmentFactory extends Factory
{
    protected $model = \App\Models\Assignment::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian
        return [
            'title' => $faker->sentence,
            'description' => $faker->text,
            'class_id' => \App\Models\ClassRoom::factory(),
            'due_date' => $faker->date
        ];
    }
}

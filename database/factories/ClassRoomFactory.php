<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class ClassRoomFactory extends Factory
{
    protected $model = \App\Models\ClassRoom::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian
        return [
            'name' => $faker->word,
            'description' => $faker->text,
            'teacher_id' => \App\Models\User::factory()->create(['role' => 'teacher'])->id,
            'class_code' => $faker->unique()->lexify('CLASS-?????'),
        ];
    }
}

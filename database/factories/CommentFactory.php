<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class CommentFactory extends Factory
{
    protected $model = \App\Models\Comment::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian
        return [
            'assignment_id' => \App\Models\Assignment::factory(),
            'user_id' => \App\Models\User::factory(),
            'comment' => $faker->text,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use App\Models\Assignment;
use App\Models\UserAssignment;
use App\Models\User;

class UserAssignmentFactory extends Factory
{
    protected $model = UserAssignment::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian
        return [
            'assignment_id' => Assignment::factory(),
            'user_id' => User::factory(),
            'status' => $faker->randomElement(['assigned', 'under review', 'approved']),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian

        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password default
            'role' => $faker->randomElement(['admin', 'teacher', 'student']),
            'phone' => $faker->phoneNumber,
            'nim' => $faker->unique()->numberBetween(100000, 999999),
            'description' => $faker->text,
            'profile_image' => $faker->imageUrl,
            'total_grade' => $faker->numberBetween(0, 1000),
            'remember_token' => Str::random(10),
        ];
    }
}

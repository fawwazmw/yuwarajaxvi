<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class SubmissionFactory extends Factory
{
    protected $model = \App\Models\Submission::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'assignment_id' => \App\Models\Assignment::factory(),
            'student_id' => \App\Models\User::factory()->create(['role' => 'student'])->id,
            'content' => $faker->text,
            'status' => $faker->randomElement(['assigned', 'under review', 'approved']),
            'grade' => $faker->numberBetween(0, 100),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ClassRoom;
use App\Models\User;
use App\Models\ClassUser;

class ClassUserFactory extends Factory
{
    protected $model = ClassUser::class;

    public function definition()
    {
        return [
            'class_id' => ClassRoom::factory(),
            'user_id' => User::factory(),
        ];
    }
}

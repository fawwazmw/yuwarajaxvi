<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class AnnouncementFactory extends Factory
{
    protected $model = \App\Models\Announcement::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID'); // Set locale to Indonesian
        return [
            'title' => $faker->sentence,
            'content' => $faker->paragraph,
            'announcement_image' => $faker->imageUrl
        ];
    }
}

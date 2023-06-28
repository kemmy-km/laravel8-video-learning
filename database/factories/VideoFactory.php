<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

// use App\Models\Video;
// use Faker\Generator as Faker;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'video_code' => $this->faker->numberBetween(0, 999999),
            'video_id' => $this->faker->numberBetween(000000000, 9999999999),
            'title' => $this->faker->name,
            'img_src' => $this->faker->url,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

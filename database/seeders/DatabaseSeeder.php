<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // 他のSeederを呼び出す
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(VideoSeeder::class);
    }
}

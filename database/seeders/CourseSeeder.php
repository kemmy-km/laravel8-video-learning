<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // サンプルのデータを定義してデータベースに挿入
        $data = [
            [
                'course_id' => '000001',
                'name' => 'Sample Video 1',
                'difficulty' => '初級',
                'lead_sentence' => 'について学びます',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => '000002',
                'name' => 'Sample Video 2',
                'difficulty' => '中級',
                'lead_sentence' => 'について学びます',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // データベースに挿入
        DB::table('course')->insert($data);
    }
}

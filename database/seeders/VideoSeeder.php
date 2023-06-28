<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // サンプルのデータを10件作成してデータベースに挿入
        // Video::factory()->count(10)->create();

        // サンプルのデータを定義してデータベースに挿入
        $data = [
            [
                'video_code' => '000001',
                'video_id' => '832017580',
                'title' => 'Sample Video 1',
                'img_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000002',
                'video_id' => '838454524',
                'title' => 'Sample Video 2',
                'img_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // データベースに挿入
        DB::table('video')->insert($data);
    }
}

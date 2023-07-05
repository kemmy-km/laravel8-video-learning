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
                'course_id' => '000001',
                'video_number' => '832017580',
                'title' => 'Sample Video 1',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000002',
                'course_id' => '000001',
                'video_number' => '838454524',
                'title' => 'Sample Video 2',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000003',
                'course_id' => '000001',
                'video_number' => '840594147',
                'title' => 'Sample Video 3',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000004',
                'course_id' => '000002',
                'video_number' => '840114240',
                'title' => 'Sample Video 4',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000005',
                'course_id' => '000002',
                'video_number' => '830034780',
                'title' => 'Sample Video 5',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000006',
                'course_id' => '000003',
                'video_number' => '16774',
                'title' => 'Sample Video 6',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000007',
                'course_id' => '000003',
                'video_number' => '15301',
                'title' => 'Sample Video 7',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000008',
                'course_id' => '000004',
                'video_number' => '181542168',
                'title' => 'Sample Video 8',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'video_code' => '000009',
                'course_id' => '000005',
                'video_number' => '24446203',
                'title' => 'Sample Video 9',
                'overview' => '動画の概要です。',
                'image_src' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // データベースに挿入
        DB::table('video')->insert($data);
    }
}

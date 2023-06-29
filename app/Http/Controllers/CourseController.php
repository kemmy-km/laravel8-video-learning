<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Dtos\CourseDetailResponse;
use App\Video;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;

class CourseController extends Controller
{
  //
  public function index()
  {
      // $courses = Course::all();
      // return view('course.courses', [
      //     'courses' => $courses
      // ]);

    /** @var \App\Dtos\CourseDetailResponse[] $sampleData */
    $sampleData = [
      [
        'course_id' => '1',
        'title' => 'サンプルコースタイトル',
        'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      [
        'code' => '2',
        'title' => 'サンプルコースタイトル2',
        'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      [
        'code' => '3',
        'title' => 'サンプルコースタイトル3',
        'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      [
        'code' => '4',
        'title' => 'サンプルコースタイトル4',
        'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
    ];

    return response()->json($sampleData);
  }

  /** 動画視聴 */
  public function getCourse($id): JsonResponse
  {
    // ユーザーを取得する処理など
    $course = [
        'code' => '1',
        'title' => 'サンプルコースタイトル',
        'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ];
    return response()->json($course);

    // $course = Course::find($id);

    // // レスポンスの作成
    // $response = new CourseDetailResponse();
    // $response->code = $course->code;
    // $response->CourseId = $course->CourseId;
    // $response->title = $course->title;
    // $response->imageSrc = $course->imageSrc;

    // return response()->json($response);
  }

  /** DBからデータを取得したい */
  public function getCourseTest()
  {
    // ユーザーを取得する処理など
    $course = Course::all();
    return response()->json($course);

    // $camelCasedVideos = $video->map(function ($video) {
    //     return $video->camelKeys();
    // });
    // return response()->json($camelCasedVideos, 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  }
}

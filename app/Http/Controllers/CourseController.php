<?php

namespace App\Http\Controllers;

use App\Course;
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
        'code' => '1',
        'title' => 'サンプルコースタイトル',
        'imgSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      [
        'code' => '2',
        'title' => 'サンプルコースタイトル2',
        'imgSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      [
        'code' => '3',
        'title' => 'サンプルコースタイトル3',
        'imgSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      [
        'code' => '4',
        'title' => 'サンプルコースタイトル4',
        'imgSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
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
        'imgSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ];
    return response()->json($course);

    // $course = Course::find($id);

    // // レスポンスの作成
    // $response = new CourseDetailResponse();
    // $response->code = $course->code;
    // $response->CourseId = $course->CourseId;
    // $response->title = $course->title;
    // $response->imgSrc = $course->imgSrc;

    // return response()->json($response);
  }
}

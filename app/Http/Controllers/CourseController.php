<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use App\Dtos\CourseDetailResponse;
use Illuminate\Http\JsonResponse;
use App\Constants\SampleData;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        /** @var \App\Dtos\CourseDetailResponse[] $sampleData */
        $sampleData = SampleData::$courses;
        return response()->json($sampleData);
    }

    /** 動画視聴 */
    public function getCourse($id): JsonResponse
    {
        $courses = [
            'courseId' => '1',
            'name' => 'サンプルコースタイトル',
            'difficulty' => 'サンプルコースタイトル',
            'leadSentence' => 'サンプルコースタイトル',
            'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
        ];
        return response()->json($courses);

        // $course = Course::find($id);

        // // レスポンスの作成
        // $response = new CourseDetailResponse();
        // $response->code = $course->code;
        // $response->CourseId = $course->CourseId;
        // $response->title = $course->title;
        // $response->imageSrc = $course->imageSrc;

        // return response()->json($response);
    }

    /** DBから一覧のデータを取得したい */
    public function getCourseTest(): JsonResponse
    {
        // ユーザーを取得する処理など
        $courses = Course::all();

        $responseCourses = $courses->map(function ($course) {
          return [
              'courseId' => $course->course_id,
              'name' => $course->name,
              'difficulty' => $course->difficulty,
              'leadSentence' => $course->lead_sentence,
              'createdAt' => $course->created_at,
              'updatedAt' => $course->updated_at,
              'imageSrc' => $course->image_src,
          ];
        });
        return response()->json($responseCourses);
    }
}

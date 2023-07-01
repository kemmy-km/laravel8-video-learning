<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Dtos\VideoDetailResponse;
use Illuminate\Http\JsonResponse;
use App\Constants\SampleData;

use Illuminate\Http\Request;

class VideoController extends Controller
{
  //
  public function index()
  {
    // 定数から呼ぶ場合
    // $appName = config('constants.APP_NAME');
    // $apiVersion = config('constants.API_VERSION');
    // $maxUploadSize = config('constants.MAX_UPLOAD_SIZE');
    // $app = config('constants.APP');

    /** @var \App\Dtos\VideoDetailResponse[] $sampleData */
    $sampleData = SampleData::$videos;
    return response()->json($sampleData);
  }

  /** 動画視聴 */
  public function getVideo($id): JsonResponse
  {
    // IDと一致するレコードを取得
    $video = Video::where('video_code', $id)->first();

    if (!$video) {
      return response()->json(['message' => 'Video not found'], 404);
    }

    $responseVideo = [
        'videoCode' => $video->video_code,
        'courseId' => $video->course_id,
        'videoNumber' => $video->video_number,
        'title' => $video->title,
        'imageSrc' => $video->image_src,
    ];
    return response()->json($responseVideo);

    // ユーザーを取得する処理など
    // $video = Video::find($id);

    // // レスポンスの作成
    // $response = new VideoDetailResponse();
    // $response->videoCode = $video->code;
    // $response->videoNumber = $video->videoNumber;
    // $response->title = $video->title;
    // $response->imageSrc = $video->imageSrc;

    // return response()->json($response);
  }

  /** DBからデータを取得したい */
  /** @var \Illuminate\Support\Collection $responseVideos */
  public function getVideos(): JsonResponse
  {
    // ユーザーを取得する処理など
    $videos = Video::all();

    $responseVideos = $videos->map(function ($video) {
        return [
            'videoCode' => $video->video_code,
            'courseId' => $video->course_id,
            'videoNumber' => $video->video_number,
            'title' => $video->title,
            'imageSrc' => $video->image_src,
        ];
    });
    return response()->json($responseVideos);
  }

  /** 特定のコースIDに所属する動画を取得して返す */
  public function getVideosByCourseId($courseId): JsonResponse
  {
    $videos = Video::where('course_id', $courseId)->get();

    // キーをキャメルケースにした上でResponseする
    $responseVideos = $videos->map(function ($video) {
      return [
          'videoCode' => $video->video_code,
          'courseId' => $video->course_id,
          'videoNumber' => $video->video_number,
          'title' => $video->title,
          'imageSrc' => $video->image_src,
      ];
    });

    return response()->json($responseVideos);
  }

  // videoの一覧表示
  // 動画一覧ページ
  // ステップページ？
  // 視聴履歴ボタンの押下時に起動
  // メモの保存
  // 履歴視聴

  // 動画を新規作成
  // DBに保存メソッド
  // 動画の情報を編集
  // 編集した情報を更新
  // 動画の情報を削除
}

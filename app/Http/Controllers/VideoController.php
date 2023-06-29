<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Dtos\VideoDetailResponse;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;

class VideoController extends Controller
{
  //
  public function index()
  {
    // 定数から呼ぶ場合
    $appName = config('constants.APP_NAME');
    $apiVersion = config('constants.API_VERSION');
    $maxUploadSize = config('constants.MAX_UPLOAD_SIZE');

    $app = config('constants.APP');

    // こういったデータを、DBから取得したい

    /** @var \App\Dtos\VideoDetailResponse[] $sampleData */
    $sampleData = [
      [
        'code' => '1',
        'videoNumber' => '832017580',
        'title' => 'サンプル動画タイトル',
        'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      ],
      // [
      //   'code' => '2',
      //   'videoNumber' => '832017580',
      //   'title' => 'サンプル動画タイトル2',
      //   'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
      // ],
    ];

    return response()->json($sampleData);
  }

  /** 動画視聴 */
  public function getVideo($id): JsonResponse
  {
    // ユーザーを取得する処理など
    $video = Video::find($id);

    // レスポンスの作成
    $response = new VideoDetailResponse();
    $response->code = $video->code;
    $response->videoNumber = $video->videoNumber;
    $response->title = $video->title;
    $response->imageSrc = $video->imageSrc;

    return response()->json($response);
  }

  /** DBからデータを取得したい */
  public function getVideoTest()
  {
    // ユーザーを取得する処理など
    $video = Video::all();
    // dd($video[0]);
    // dd(response()->json($video[0]));
    return response()->json($video);

    // $camelCasedVideos = $video->map(function ($video) {
    //     return $video->camelKeys();
    // });
    // return response()->json($camelCasedVideos, 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  }

      // レスポンスの作成
    // $response = new VideoDetailResponse();
    // $response->code = $video->code;
    // $response->videoNumber = $video->videoNumber;
    // $response->title = $video->title;
    // $response->imageSrc = $video->imageSrc;

    // return response()->json($response);


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

<?php

namespace App\Http\Controllers;

use App\Models\Video;

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

        // $videos = Video::all();
        // return response()->json($videos);

        $sampleData = [
            [
                'title' => 'Sample Video 1',
                'duration' => '10',
                'url' => 'https://example.com/video1',
                'app' => $app,
            ],
            [
                'title' => 'Sample Video 2',
                'duration' => '10',
                'url' => 'https://example.com/video1',
                'appName' => $appName,
            ],
        ];

        return response()->json($sampleData);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Video;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function index()
    {
        // $videos = Video::all();
        $sampleData = [
            [
                'title' => 'Sample Video 1',
                'duration' => '10',
                'url' => 'https://example.com/video1',
            ],
            [
                'title' => 'Sample Video 2',
                'duration' => '10',
                'url' => 'https://example.com/video1',
            ],
        ];

        return response()->json($sampleData);
        // return response()->json($videos);
    }
}

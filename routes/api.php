<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CourseController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/videos', [VideoController::class, 'index']);
// http://127.0.0.1:8000/api/videos

Route::get('/test2', function () {
  return response()->json(['message' => 'test'], 200);
});

// DBを作成して接続できたらこちらを使用したい
Route::get('/videos/{id}', [VideoController::class, 'getVideo']);

Route::get('/videos2', [VideoController::class, 'getVideoTest']);

/** そのコースに所属する動画群を取得する */
Route::get('/course/videos/{courseId}', [VideoController::class, 'getVideosByCourseId']);

// コース一覧
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses2', [CourseController::class, 'getCourseTest']);
// コース詳細：サンプル
Route::get('/course/{id}', [CourseController::class, 'getCourse']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\AuthController;

Route::get('/login2', function () {
  $data = [
      'message' => 'ログインに成功しました。',
      'token' => 'sample_token'
  ];
  return response()->json($data);
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

// Route::group(['middleware' => ['web', 'auth:sanctum', 'verified']], function () {
Route::group(['middleware' => ['web', 'auth:sanctum']], function () {
    // ここにAPIのルートを定義する
  // Route::post('/login', [LoginController::class, 'login']);
  Route::get('/videos', [VideoController::class, 'index']);
});


// Route::group(['middleware' => 'auth:sanctum'], function() {
//   Route::apiResource('tasks', 'TaskController');
//   // Route::patch('tasks/update-done/{task}', 'TaskController@updateDone');
//   Route::patch('/tasks/update-done/{task}', [TaskController::class, 'updateDone']);
//   Route::get('auth:api')->get('/user', function(Request $request) {
//     return $request->user();
//   });
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

// ユーザー登録
// Route::post('/register', [AuthController::class, 'register']);

// // ユーザーログイン
// Route::post('/login', [AuthController::class, 'login']);

// // ユーザーログアウト
// Route::post('/logout', [AuthController::class, 'logout']);

// Route::get('/videos', [VideoController::class, 'index']);
// http://127.0.0.1:8000/api/videos

// DBを作成して接続できたらこちらを使用したい
Route::get('/video/{id}', [VideoController::class, 'getVideo']);

Route::get('/videos2', [VideoController::class, 'getVideos']);

/** そのコースに所属する動画群を取得する */
Route::get('/course/videos/{courseId}', [VideoController::class, 'getVideosByCourseId']);

// コース一覧
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses2', [CourseController::class, 'getCourses']);

// コース詳細：サンプル
Route::get('/course/{id}', [CourseController::class, 'getCourseById']);

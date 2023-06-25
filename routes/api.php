<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/videos', [VideoController::class, 'index']);
// http://127.0.0.1:8000/api/videos

Route::get('/test2', function () {
  return response()->json(['message' => 'test'], 200);
});
// http://127.0.0.1:8000/api/test2


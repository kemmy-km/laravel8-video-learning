<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class AuthController extends Controller
// {
//     public function register(Request $request)
//     {
//         // ユーザー登録のロジックを実装します
//     }

//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
//             // ログイン成功時の処理
//             $user = Auth::user();
//             $token = $user->createToken('api_token')->plainTextToken;

//             return response()->json([
//                 'user' => $user,
//                 'token' => $token,
//             ]);
//         } else {
//             // ログイン失敗時の処理
//             return response()->json([
//                 'message' => 'ログインに失敗しました。',
//             ], 401);
//         }
//     }

//     public function logout(Request $request)
//     {
//         // ログアウトの処理を実装します
//     }
// }

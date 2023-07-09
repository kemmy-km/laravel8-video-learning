<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request): JsonResponse
    {
      // NOTE laravel.logで検証する
      Log::debug('LoginController - loginMethodCalled');

      $credentials = $request->validate([
          'email' => ['required', 'email'],
          'password' => ['required'],
      ]);

      Log::debug($credentials);

      if (Auth::attempt($credentials)) {
        Log::debug('if通過');

          $request->session()->regenerate();

          // Sanctumでトークンを発行し、クライアントに返す
          $token = $request->user()->createToken('auth_token')->plainTextToken;

        Log::debug($token);

          // return redirect()->intended('dashboard');
          // return response()->json(Auth::user());

          return response()->json([
              'user' => $request->user(),
              'token' => $token,
          ]);
      } else {
        Log::debug('else');
      }

      // return back()->withErrors([
      //     'email' => 'The provided credentials do not match our records.',
      // ])->onlyInput('email');

      return response()->json([], 401);
      // return response()->json(['message' => 'Invalid credentials'], 401);
    }

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return redirect('/');
        return response()->json(true);
        // return response()->json(['message' => 'Logged out successfully']);
    }
}

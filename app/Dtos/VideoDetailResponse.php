<?php

namespace App\Dtos;

// namespace App\Models;

class VideoDetailResponse
{
  /** 動画コード */
  public string $code;
  /** コースコード */
  // public string $courseCode;

  /** vimeoID */
  public string $videoId;

  /** 動画タイトル */
  public string $title;

  /** サムネイル画像 */
  public string $imgSrc;
}

// NOTE コントローラで使用する場合
// <?php

// namespace App\Http\Controllers;

// use App\Dto\UserDto;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function store(Request $request)
//     {
//         $userDto = new UserDto();
//         $userDto->name = $request->input('name');
//         $userDto->email = $request->input('email');
//         $userDto->password = $request->input('password');

//         // DTOを利用して処理を行う...
//     }
// }

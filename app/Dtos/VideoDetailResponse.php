<?php

namespace App\Dtos;

// namespace App\Models;

class VideoDetailResponse
{
  /** 動画コード */
  public int $videoCode;

  /** コースID */
  public int $courseId;

  /** vimeoID */
  public string $videoNumber;

  /** 動画タイトル */
  public string $title;

  /** 動画の概要 */
  public string $overview;

  /** サムネイル画像 */
  public string $imageSrc;
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

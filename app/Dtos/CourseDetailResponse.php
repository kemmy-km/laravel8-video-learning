<?php

namespace App\Dtos;

class CourseDetailResponse
{
  /** 動画コード */
  public string $code;
  /** コースコード */
  // public string $courseId;

  /** コースタイトル */
  public string $title;

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

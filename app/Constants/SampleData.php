<?php

namespace App\Constants;

class SampleData
{
  /** コース */
  public static $courses = [
    [
      'course_id' => 1,
      'name' => 'aサンプルコースタイトル',
      'difficulty' => '初級',
      'leadSentence' => '初めまして。これから頑張っていきましょう。',
      'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ],
    [
      'course_id' => 2,
      'name' => 'サンプルコースタイトル2',
      'difficulty' => '初級',
      'leadSentence' => '初めまして。これから頑張っていきましょう。',
      'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ],
    [
      'course_id' => 3,
      'name' => 'サンプルコースタイトル3',
      'difficulty' => '初級',
      'leadSentence' => '初めまして。これから頑張っていきましょう。',
      'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ],
    [
      'course_id' => 4,
      'name' => 'サンプルコースタイトル4',
      'difficulty' => '初級',
      'leadSentence' => '初めまして。これから頑張っていきましょう。',
      'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ],
  ];

  /** 動画 */
  public static $videos = [
    [
      'videoCode' => 1,
      'courseId' => 1,
      'videoNumber' => '832017580',
      'title' => 'サンプルビデオ1',
      'overview' => '動画の概要です。',
      'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ],
    [
      'videoCode' => 2,
      'courseId' => 2,
      'videoNumber' => '838454524',
      'title' => 'サンプルビデオ2',
      'overview' => '動画の概要です。',
      'imageSrc' => 'https://thumb.photo-ac.com/42/42afd1bda88d88af5323f0b8a84620ff_t.jpeg',
    ],
  ];
}

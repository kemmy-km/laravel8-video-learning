<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /** このように設定することで、複数系ではなくてもテーブル名を設定することができる */
    protected $table = 'video';

    // 主キーをカスタマイズする
    protected $primaryKey = 'video_code';

    // タイムスタンプのカラム名をカスタマイズする
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /** DBのカラムなどと対応している */
    protected $fillable = [
        'title',
        'video_code',
        'image_src',
    ];

    // リレーションシップの定義など
}

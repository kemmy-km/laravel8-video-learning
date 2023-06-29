<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /** このように設定することで、複数系ではなくてもテーブル名を設定することができる */
    protected $table = 'course';

    // 主キーをカスタマイズする
    protected $primaryKey = 'course_id';

    // タイムスタンプのカラム名をカスタマイズする
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // 動画テーブルとの関係は1対多のはず
    public function video()
    {
        return $this->hasMany(Video::class);
    }

    // 講師テーブルとの関係は1対多のはず
    // public function instructor()
    // {
    //     return $this->belongsTo(Instructor::class);
    // }
}

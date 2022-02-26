<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // モデルに関連づけるテーブル
    protected $table = 'categories';

    // テーブルに関連づける主キー
    protected $primaryKey = 'category_id';

    // 登録・編集ができるカラム
    protected $fillable = [
        'category_name'
    ];

    /**
     * categoriesテーブルのレコードを全件取得
     * 
     * @param void
     * @return Category categoriesテーブル
     */
    public function allCategoriesData()
    {
        return $this->get();
    }
}

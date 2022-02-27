<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true; // falseからtrueに変更
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validate = [];
        $validate += [
            // タイトル必須・50文字以内
            'title' => [
                'required',
                'max:50',
            ],
            // カテゴリー必須
            'category_id' => [
                'required',
            ],
            // 日付
            'date' => [
                'required',
                'after:yesterday',
            ],
            // 開始時間
            'start_time' => [
                'required',
            ],
            // 終了時間
            'end_time' => [
                'required',
            ],
            // 参加費
            'entry_fee' => [
                'required',
                'numeric',
                'integer',
                'min:0',
            ],
            // 詳細
            'content' => [
                'required',
            ],
        ];

        return $validate;
    }
}

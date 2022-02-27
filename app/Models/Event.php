<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Event extends Model
{
    use HasFactory;
    // モデルに関連づけるテーブル
    protected $table = 'events';

    // テーブルに関連づける主キー
    protected $primaryKey = 'event_id';

    // 登録・編集ができるカラム
    protected $fillable = [
        'category_id',
        'title',
        'date',
        'start_time',
        'end_time',
        'content',
        'entry_fee',
    ];

    /**
     * カテゴリーリレーション
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
    /**
     * eventsテーブルのレコードを全件取得
     *
     * @param void
     * @return Event eventsテーブル
     */
    public function allEventsData()
    {
        return $this->get();
    }

    /**
     * 登録処理 eventsテーブルにデータをinsert
     *
     */
    public function insertEventData($request)
    {
        return $this->create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'content' => $request->content,
            'entry_fee' => $request->entry_fee,
        ]);
    }

    /**
     * idをもとにeventsテーブルから特定のレコードに絞り込む
     *
     * @param int $id イベントID
     * @return Event
     */
    public function findEventByEventId($id)
    {
        return $this->find($id);
    }

    /**
     * 更新処理
     */
    public function updatedEventData($request, $event)
    {
        return $event->fill([
            'category_id' => $request->category_id,
            'title'       => $request->title,
            'date'        => $request->date,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
            'entry_fee'   => $request->entry_fee,
            'content'     => $request->content,
        ])->save();
    }

    /**
     * 削除処理
     */
    public function deleteEventData($id)
    {
        return $this->destroy($id);
    }

    /**
     * 部分検索機能
     *
     * @param string $word 入力した検索ワード
     */
    public function searchWord($word)
    {
        return $this
            ->where('title', 'like', '%' . $word . '%')
            ->orWhere('date', 'like', '%' . $word . '%')
            ->orWhere('start_time', 'like', '%' . $word . '%')
            ->orWhere('end_time', 'like', '%' . $word . '%')
            ->orWhere('content', 'like', '%' . $word . '%')
            ->orWhere('entry_fee', 'like', '%' . $word . '%')
            ->get();
        // 一致検索
        // where('title', 'Laravel')

        // 部分一致検索
        // where('title', 'like', '%'.$word.'%')

        // or検索
        // where()
        // ->orWhere()
        // ->orWhere()

    }
}

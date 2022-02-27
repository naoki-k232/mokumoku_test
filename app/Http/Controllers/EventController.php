<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // トランザクションのため追加
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    public function __construct()
    {
        $this->event = new Event();
        $this->category = new Category();
    }
    /**
     * イベント一覧画面
     */
    public function index()
    {
        // Eloquentでeventsテーブルにあるデータを全て取得
        $events = $this->event->allEventsData();
        // データが取得できたか表示
        // dd($events);

        return view('event.index', compact('events'));
    }

    /**
     * もくもく会登録画面
     */
    public function register()
    {
        $categories = $this->category->allCategoriesData();
        return view('event.register', compact('categories'));
    }

    /**
     * もくもく会登録処理
     */
    public function create(EventRequest $request)
    {
        try {
            // トランザクション開始
            DB::beginTransaction();
            // リクエストされたデータをもとにeventsテーブルにデータをinsert
            $insertEvent = $this->event->insertEventData($request);
            // 処理に成功したらコミット
            DB::commit();
        } catch (\Throwable $e) {
            // 処理に失敗したらロールバック
            DB::rollBack();
            // エラーログ
            \Log::error($e);
            // 登録処理に失敗時にリダイレクト
            return redirect()->route('event.index')->with('error', 'もくもく会の登録に失敗しました。');
        }

        return redirect()->route('event.index')->with('success', 'もくもく会の登録に成功しました。');
    }

    /**
     * 詳細画面
     */
    public function show($id)
    {
        // $id(event_id)をもとに、eventsテーブルの特定のレコードに絞り込む
        $event = $this->event->findEventByEventId($id);

        return view('event.show', compact('event'));
    }
}

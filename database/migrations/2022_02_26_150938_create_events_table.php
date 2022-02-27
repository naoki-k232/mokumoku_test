<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // 主キー
            $table->id('event_id');
            // カテゴリーID
            $table->unsignedBigInteger('category_id');
            // タイトル
            $table->string('title', 50);
            // 開催日付
            $table->date('date');
            // 開始時間
            $table->time('start_time');
            // 終了時間
            $table->time('end_time');
            // 詳細
            $table->text('content');
            // 参加費用
            $table->integer('entry_fee');
            $table->timestamps();

            // カテゴリーID外部キー制約
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

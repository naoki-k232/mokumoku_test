<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * イベント一覧画面
     */
    public function index()
    {
        return view('event.index');
    }
}

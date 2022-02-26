<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * カテゴリー一覧画面
     */
    public function index()
    {
        return view('category.index');
    }
}

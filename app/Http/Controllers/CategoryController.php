<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->category = new Category();
    }
    /**
     * カテゴリー一覧画面
     */
    public function index()
    {
        $categories = $this->category->allCategoriesData();

        return view('category.index', compact('categories'));
    }
}

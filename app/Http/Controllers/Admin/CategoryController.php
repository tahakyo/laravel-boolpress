<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function show($slug) {
        $category = Category::where('slug', '=', $slug)->first();
        
        return view('admin.categories.show', compact('category'));
    }
}

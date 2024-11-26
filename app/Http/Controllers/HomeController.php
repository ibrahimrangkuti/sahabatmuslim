<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Blog::latest()->take(3)->get();
        $categoryDoas = Category::where('category_type', 'doa')->get();

        return view('pages.home', compact('articles', 'categoryDoas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Blog::where('status', 1)->latest()->simplePaginate(9);

        return view('pages.article.index', [
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        $article = Blog::where('slug', $slug)->first();
        $relatedArticles = Blog::where('id', '!=', $article->id)->where('category_id', $article->category_id)->where('status', true)->take(4)->get();

        return view('pages.article.show', compact('article', 'relatedArticles'));
    }
}

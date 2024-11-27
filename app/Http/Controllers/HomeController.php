<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Blog::latest()->take(3)->get();
        $categoryDoas = Category::where('category_type', 'doa')->get();

        $hadistPerawi = [];
        $hadistPerawiJson = Http::get('https://hadis-api-id.vercel.app/hadith/')->json();
        foreach ($hadistPerawiJson as $item) {
            $hadistPerawi[] = $item['slug'];
        }
        $randArrayKey = array_rand($hadistPerawi);

        $hadistDisplayJson = Http::get('https://hadis-api-id.vercel.app/hadith/' . $hadistPerawi[$randArrayKey])->json();

        return view('pages.home', [
            'articles' => $articles,
            'categoryDoas' => $categoryDoas,
            'hadistDisplayJson' => $hadistDisplayJson
        ]);
    }
}

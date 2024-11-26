<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    public function index()
    {
        $categoryDoas = Category::where('category_type', 'doa')->get();
        return view('pages.doa.index', compact('categoryDoas'));
    }
}

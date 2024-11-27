<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doa;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    public function index(Request $request)
    {
        $categoryDoas = Category::where('category_type', 'doa')->get();

        $doas = Doa::simplePaginate(5);
        if ($request->category) {
            $category = Category::where('slug', $request->category)->first();
            $doas = Doa::where('category_id', $category->id)->simplePaginate(5);
        }

        $doas->appends(['category' => $request->category]);

        return view('pages.doa.index', compact('categoryDoas', 'doas'));
    }
}

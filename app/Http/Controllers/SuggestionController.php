<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'body' => 'required|string'
        ]);

        Suggestion::create($data);

        return redirect()->back()->with('success', 'Berhasil memberikan saran. Terima kasih!');
    }
}

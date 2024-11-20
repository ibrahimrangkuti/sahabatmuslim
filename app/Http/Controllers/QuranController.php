<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    protected $surah;

    public function __construct()
    {
        $this->surah = Http::get('https://api.quran.gading.dev/surah')->json();
    }

    public function index()
    {
        return view('pages.quran.index', [
            'surah' => $this->surah
        ]);
    }

    public function juz($no)
    {
        $juz = Http::get('https://api.quran.gading.dev/juz/' . $no)->json();

        return view('pages.quran.juz.show', [
            'juz' => $juz,
            'no' => $no,
            'surah' => $this->surah
        ]);
    }

    public function surahDetail($no)
    {
        $surahDetail = Http::get('https://api.quran.gading.dev/surah/' . $no)->json();

        return view('pages.quran.surah.show', [
            'surah' => $this->surah,
            'surahDetail' => $surahDetail,
            'no' => $no,
        ]);
    }
}

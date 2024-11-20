@extends('layouts.layout2')

@section('content')
    <div class="px-8 sm:ml-64 border-gray-200 border-dashed rounded-lg">
        <div class="text-center py-12">
            <h1 class="text-2xl font-semibold">Surah
                {{ $surahDetail['data']['name']['transliteration']['id'] }}</h1>
            <span class="text-slate-400">{{ $surahDetail['data']['name']['translation']['id'] }}</span>
        </div>

        @foreach ($surahDetail['data']['verses'] as $index => $verse)
            <div class="w-full py-4">
                <h4 class="text-2xl text-end">{{ $verse['text']['arab'] }}</h4>
                <p>{{ $verse['text']['transliteration']['en'] }}</p>
                <p class="text-slate-400">{{ $verse['translation']['id'] }}</p>
                <figure>
                    <audio class="audio-player" controls src="{{ $verse['audio']['primary'] }}"
                        data-index="{{ $index }}"></audio>
                </figure>

            </div>
        @endforeach

        @if ($no != 114)
            <a href="/quran/surah/{{ $no + 1 }}" class="float-end py-10">
                Surah selanjutnya ->
            </a>
        @endif

    </div>
@endsection

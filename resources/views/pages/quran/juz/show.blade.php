@extends('layouts.layout2')

@section('content')
    <div class="px-8 sm:ml-64 border-gray-200 border-dashed rounded-lg">
        <h1 class="text-center text-2xl font-semibold py-12">Juz {{ $no }}</h1>

        @foreach ($juz['data']['verses'] as $index => $verse)
            <div class="w-full py-4" id="verse-{{ $index }}">
                <h4 class="text-4xl text-end verse-arabic">{{ $verse['text']['arab'] }}</h4>
                <p class="py-2 text-lg text-justify verse-transliteration">{{ $verse['text']['transliteration']['en'] }}</p>
                <p class="text-slate-400 text-justify">{{ $verse['translation']['id'] }}</p>
                <figure>
                    <audio class="audio-player" controls src="{{ $verse['audio']['primary'] }}"
                        data-index="{{ $index }}"></audio>
                </figure>

            </div>
        @endforeach
    </div>
@endsection

@extends('layouts.layout2')

@section('content')
    <div class="px-8 sm:ml-64 border-gray-200 border-dashed rounded-lg">
        <div class="text-center py-12">
            <h1 class="text-2xl font-semibold">Surah
                {{ $surahDetail['data']['name']['transliteration']['id'] }}</h1>
            <div>
                <span class="text-slate-400">{{ $surahDetail['data']['name']['translation']['id'] }} -
                    {{ $surahDetail['data']['numberOfVerses'] }} ayat -
                    {{ $surahDetail['data']['revelation']['id'] }}</span>
            </div>


            <!-- Modal toggle -->
            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="block text-slate-500 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                >> Lihat tafsir
            </button>

            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Tafsir
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-justify text-gray-500 dark:text-gray-400">
                                {{ $surahDetail['data']['tafsir']['id'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @foreach ($surahDetail['data']['verses'] as $index => $verse)
            <div class="w-full p-4" id="verse-{{ $index }}">
                <h4 class="text-4xl text-end verse-arabic">{{ $verse['text']['arab'] }}</h4>
                <p class="py-2 text-lg text-justify verse-transliteration">
                    {{ $verse['number']['inSurah'] . '. ' . $verse['text']['transliteration']['en'] }}</p>
                <p class="text-slate-400 text-justify">{{ $verse['translation']['id'] }}</p>
                <figure>
                    <audio class="audio-player" controls src="{{ $verse['audio']['primary'] }}"
                        data-index="{{ $index }}" controlsList="nodownload"></audio>
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

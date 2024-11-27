@extends('layouts.app')

@section('content')
    <section class="px-4 mx-auto max-w-screen-xl" id="doa-index">
        <h2 class="text-center text-xl font-semibold py-12">Kumpulan Doa</h2>
        <div class="flex flex-row gap-2 overflow-y-auto category-label-section mb-6">
            <a href="/doa"
                class="px-6 py-2 border border-gray-900 rounded-full whitespace-nowrap
            {{ request()->is('doa') && !request('category') ? 'bg-gray-900 text-white' : '' }}">
                Semua</a>
            @foreach ($categoryDoas as $category)
                <a href="?category={{ $category->slug }}"
                    class="px-6 py-2 border border-gray-900 rounded-full whitespace-nowrap
                    {{ request('category') == $category->slug ? 'bg-gray-900 text-white' : '' }}">
                    {{ $category->name }}</a>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 auto-rows-auto">
            @foreach ($doas as $doa)
                <div
                    class="max-w-full h-fit p-6 mb-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ Str::limit($doa->title, 20) }}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-end text-2xl text-gray-500 dark:text-gray-400">
                        {{ Str::limit($doa->arabic_text, 30) }}
                    </p>
                    <a data-modal-target="detailDoaModal-{{ $doa->id }}"
                        data-modal-toggle="detailDoaModal-{{ $doa->id }}"
                        class="inline-flex font-medium items-center text-blue-600 hover:underline">
                        Baca selengkapnya
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>

                    <div id="detailDoaModal-{{ $doa->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ $doa->title }}
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="detailDoaModal-{{ $doa->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <p class="text-4xl text-end leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $doa->arabic_text }}
                                    </p>
                                    <p
                                        class="text-base italic text-justify leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $doa->transliteration }}
                                    </p>
                                    <p class="pt-3 pb-2">Artinya</p>
                                    <p class="text-base text-justify leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $doa->meaning }}
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                {{-- <div
                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                        accept</button>
                                    <button data-modal-hide="default-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection

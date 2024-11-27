@extends('layouts.app')

@section('content')
    <section class="flex items-center bg-gradient-to-b from-gray-900 to-gray-600 py-28" id="header">
        <div class="grid max-w-screen-xl px-4 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 text-center md:text-start">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                    Jadikan Hari Anda Lebih Bermakna</h1>
                <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl text-gray-400">Temukan
                    <span class="typed bg-amber-500 text-white px-2"></span>untuk menjalani hidup lebih
                    baik
                    setiap
                    hari.
                </p>
                <a href="#article"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:ring-amber-900">
                    Jelajahi Sekarang
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <?xml version="1.0" ?>

                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg width="600px" height="400px" viewBox="0 0 64 64" id="Layer_1" version="1.1" xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                    <style type="text/css">
                        .st0 {
                            fill: rgb(245 158 11 / var(--tw-bg-opacity, 1));
                        }

                        .st1 {
                            fill: #ffffff;
                        }
                    </style>

                    <g>

                        <g>

                            <circle class="st0" cx="32" cy="32" r="32" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M42.268,14.5c-0.276,0-0.5-0.224-0.5-0.5c0-0.827-0.673-1.5-1.5-1.5c-0.534,0-1.032,0.287-1.3,0.75    c-0.138,0.239-0.446,0.322-0.683,0.183c-0.239-0.138-0.321-0.444-0.183-0.683c0.445-0.771,1.275-1.25,2.165-1.25    c1.379,0,2.5,1.121,2.5,2.5C42.768,14.276,42.544,14.5,42.268,14.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M42.268,14.5c-0.276,0-0.5-0.224-0.5-0.5c0-1.379,1.121-2.5,2.5-2.5c0.89,0,1.72,0.479,2.165,1.25    c0.139,0.238,0.057,0.545-0.183,0.683c-0.237,0.139-0.544,0.056-0.683-0.183c-0.268-0.463-0.766-0.75-1.3-0.75    c-0.827,0-1.5,0.673-1.5,1.5C42.768,14.276,42.544,14.5,42.268,14.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M43.268,14.5h-2c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h2c0.276,0,0.5,0.224,0.5,0.5    S43.544,14.5,43.268,14.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M50,51.5c-0.276,0-0.5-0.224-0.5-0.5V24.38l-17.486-4.857L14.5,25.36V51c0,0.276-0.224,0.5-0.5,0.5    s-0.5-0.224-0.5-0.5V25c0-0.215,0.138-0.406,0.342-0.475l18-6c0.095-0.031,0.194-0.035,0.292-0.007l18,5    C50.351,23.578,50.5,23.775,50.5,24v27C50.5,51.276,50.276,51.5,50,51.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M14,35.5c-0.112,0-0.224-0.038-0.313-0.11C13.568,35.295,13.5,35.151,13.5,35v-3    c0-0.225,0.149-0.422,0.366-0.481l18-5c0.079-0.022,0.162-0.024,0.242-0.007l18,4C50.337,30.563,50.5,30.766,50.5,31v3    c0,0.147-0.064,0.286-0.177,0.382s-0.26,0.139-0.405,0.111l-17.904-2.984l-17.905,3.979C14.072,35.496,14.036,35.5,14,35.5z     M14.5,32.38v1.997l17.392-3.865c0.061-0.015,0.127-0.017,0.19-0.005L49.5,33.41v-2.009l-17.486-3.886L14.5,32.38z" />

                        </g>

                        <g>

                            <g>

                                <path class="st1"
                                    d="M24,39.389c-0.122,0-0.241-0.045-0.334-0.128c-0.105-0.095-0.166-0.229-0.166-0.372v-3.111     c0-0.234,0.163-0.438,0.392-0.488l2-0.444c0.149-0.031,0.304,0.004,0.421,0.099c0.119,0.095,0.188,0.238,0.188,0.39v3.334     c0,0.255-0.191,0.469-0.445,0.497l-2,0.222C24.037,39.388,24.019,39.389,24,39.389z M24.5,36.179v2.151l1-0.11v-2.264     L24.5,36.179z" />

                            </g>

                            <g>

                                <path class="st1"
                                    d="M42,39.611c-0.019,0-0.037-0.001-0.056-0.003l-4-0.444c-0.253-0.028-0.444-0.242-0.444-0.497V35     c0-0.147,0.064-0.286,0.177-0.382c0.112-0.095,0.262-0.136,0.405-0.111l4,0.667c0.241,0.04,0.418,0.249,0.418,0.493v3.444     c0,0.143-0.061,0.277-0.167,0.372C42.241,39.566,42.122,39.611,42,39.611z M38.5,38.22l3,0.333v-2.462l-3-0.501V38.22z" />

                            </g>

                            <g>

                                <path class="st1"
                                    d="M48,40.277c-0.019,0-0.037-0.001-0.055-0.003l-2-0.222c-0.254-0.028-0.445-0.242-0.445-0.497v-3.223     c0-0.147,0.064-0.286,0.177-0.382c0.112-0.095,0.263-0.135,0.405-0.111l2,0.334c0.241,0.04,0.418,0.249,0.418,0.493v3.11     c0,0.143-0.061,0.277-0.166,0.372C48.241,40.232,48.122,40.277,48,40.277z M46.5,39.108l1,0.11v-2.128l-1-0.167V39.108z" />

                            </g>

                            <g>

                                <path class="st1"
                                    d="M16,40.277c-0.122,0-0.241-0.045-0.333-0.127c-0.106-0.096-0.167-0.23-0.167-0.373v-2.222     c0-0.234,0.163-0.438,0.392-0.488l4-0.889c0.15-0.031,0.304,0.003,0.421,0.099c0.119,0.095,0.188,0.238,0.188,0.39v2.666     c0,0.255-0.191,0.469-0.444,0.497l-4,0.444C16.037,40.276,16.019,40.277,16,40.277z M16.5,37.957v1.262l3-0.333V37.29     L16.5,37.957z" />

                            </g>

                            <g>

                                <path class="st1"
                                    d="M34,38.723c-0.019,0-0.037-0.001-0.056-0.003L32,38.503l-1.944,0.217c-0.142,0.014-0.283-0.03-0.389-0.124     c-0.106-0.096-0.167-0.23-0.167-0.373v-3.778c0-0.234,0.163-0.438,0.392-0.488l2-0.444c0.061-0.015,0.127-0.017,0.19-0.005     l2,0.333c0.241,0.04,0.418,0.249,0.418,0.493v3.89c0,0.143-0.061,0.277-0.167,0.373C34.241,38.678,34.122,38.723,34,38.723z      M32,37.5c0.019,0,0.037,0.001,0.056,0.003l1.444,0.161v-2.907l-1.486-0.248L30.5,34.846v2.818l1.444-0.161     C31.963,37.501,31.981,37.5,32,37.5z" />

                            </g>

                        </g>

                        <g>

                            <path class="st1"
                                d="M32,51.5c-0.276,0-0.5-0.224-0.5-0.5V41c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v10    C32.5,51.276,32.276,51.5,32,51.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M32,25.5c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6    C32.5,25.276,32.276,25.5,32,25.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M12,19.5H8c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h4c0.276,0,0.5,0.224,0.5,0.5S12.276,19.5,12,19.5z" />

                        </g>

                        <g>

                            <path class="st1"
                                d="M56,37.5h-3c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5S56.276,37.5,56,37.5z    " />

                        </g>

                    </g>

                </svg>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl mx-4 md:mx-auto" id="article">
        <div class="flex flex-col items-center py-16">
            <h4 class="text-2xl font-bold">Artikel Terbaru</h4>
            <p class="md:w-1/2 text-center text-lg text-slate-500">Temukan artikel Islami yang mendalam dan inspiratif untuk
                membantu Anda memahami, menjalani, dan menyebarkan nilai-nilai Islam dalam kehidupan sehari-hari.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($articles as $article)
                <div
                    class="max-w-full max-h-fit bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('article.show', $article->slug) }}">
                        <img class="rounded-t-lg w-full h-[200px] object-cover"
                            src="{{ asset('storage/' . $article->thumbnail) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $article->category->name }}</span>
                        <a href="{{ route('article.show', $article->slug) }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mt-3">
                                {{ $article->title }}
                            </h5>
                        </a>
                        <div class="py-3 font-normal text-gray-700 dark:text-gray-400 text-justify">{!! Str::limit($article->content, 200) !!}
                        </div>
                        <a href="{{ route('article.show', $article->slug) }}"
                            class="inline-flex items-center py-2 text-sm hover:text-amber-600 font-medium text-center text-white`">
                            Baca selengkapnya
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-gray-100 my-20 antialiased" id="doa">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 py-20">
            <div class="mb-4 flex items-center justify-between gap-4 md:mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Kumpulan Doa</h2>
            </div>

            <div class="grid gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-2">
                @foreach ($categoryDoas as $categoryDoa)
                    <a href="/doa?category={{ $categoryDoa->slug }}"
                        class="flex rounded-lg border border-gray-200 bg-white p-6 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">{{ $categoryDoa->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section class="my-20 antialiased" id="hadist">
        <div class="mx-auto max-w-screen-xl">
            <h4 class="text-2xl font-medium mb-10 text-center">Hadist</h4>
            <div class="flex justify-center gap-8 overflow-x-auto snap-x snap-mandatory">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($hadistDisplayJson['items'] as $hadist)
                            <div class="swiper-slide">
                                <article
                                    class="snap-start shrink-0 w-[25rem] p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex justify-between items-center mb-5 text-gray-500">
                                        <span
                                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                            {{ $hadistDisplayJson['name'] }}
                                        </span>
                                    </div>
                                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                        {{ Str::limit($hadist['id'], 80) }}</p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-4">
                                            <img class="w-7 h-7 rounded-full"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                                alt="Jese Leos avatar" />
                                            <span class="font-medium dark:text-white">
                                                Jese Leos
                                            </span>
                                        </div>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                            Read more
                                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

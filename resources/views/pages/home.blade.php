@extends('layouts.app')

@section('content')
    <section class="flex items-center bg-gray-900 py-20" id="header">
        <div class="grid max-w-screen-xl px-4 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 text-center md:text-start">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                    Jadikan Hari Anda Lebih Bermakna</h1>
                <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl text-gray-400">Temukan
                    doa harian, hadist pilihan, dan inspirasi Islami untuk menjalani hidup lebih baik setiap hari.</p>
                <a href="#article"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:ring-primary-900">
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

    <section class="max-w-screen-xl mx-4 md:mx-auto py-16" id="article">
        <div class="flex flex-col items-center">
            <h4 class="text-2xl font-bold">Artikel Terbaru</h4>
            <p class="md:w-1/2 text-center text-lg text-slate-500">We use an agile approach to test assumptions and connect
                with the
                needs of your
                audience
                early and often.</p>
        </div>
        @foreach ($blogs as $blog)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg"
                        src="https://images.unsplash.com/photo-1590076215667-875d4ef2d7de?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </a>
                <div class="p-5">
                    <span
                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $blog->category->name }}</span>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mt-3">{{ $blog->title }}
                        </h5>
                    </a>
                    <div class="py-3 font-normal text-gray-700 dark:text-gray-400">{!! $blog->content !!}</div>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-16" id="doa">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mb-4 flex items-center justify-between gap-4 md:mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Kumpulan Doa</h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Computer &amp; Office</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16.872 9.687 20 6.56 17.44 4 4 17.44 6.56 20 16.873 9.687Zm0 0-2.56-2.56M6 7v2m0 0v2m0-2H4m2 0h2m7 7v2m0 0v2m0-2h-2m2 0h2M8 4h.01v.01H8V4Zm2 2h.01v.01H10V6Zm2-2h.01v.01H12V4Zm8 8h.01v.01H20V12Zm-2 2h.01v.01H18V14Zm2 2h.01v.01H20V16Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Collectibles &amp; Toys</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Books</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Fashion/Clothes</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Sports &amp; Outdoors</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Painting &amp; Hobby</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 9a3 3 0 0 1 3-3m-2 15h4m0-3c0-4.1 4-4.9 4-9A6 6 0 1 0 6 9c0 4 4 5 4 9h4Z"></path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Electronics</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Food &amp; Grocery</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M20 16v-4a8 8 0 1 0-16 0v4m16 0v2a2 2 0 0 1-2 2h-2v-6h2a2 2 0 0 1 2 2ZM4 16v2a2 2 0 0 0 2 2h2v-6H6a2 2 0 0 0-2 2Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Music</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 16H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v1M9 12H4m8 8V9h8v11h-8Zm0 0H9m8-4a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">TV/Projectors</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.041 13.862A4.999 4.999 0 0 1 17 17.831V21M7 3v3.169a5 5 0 0 0 1.891 3.916M17 3v3.169a5 5 0 0 1-2.428 4.288l-5.144 3.086A5 5 0 0 0 7 17.831V21M7 5h10M7.399 8h9.252M8 16h8.652M7 19h10">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Health &amp; beauty</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Home Air Quality</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Gaming/Consoles</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Car &amp; Motorbike</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z">
                        </path>
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Photo/Video</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a28.076 28.076 0 0 1-1.091 9M7.231 4.37a8.994 8.994 0 0 1 12.88 3.73M2.958 15S3 14.577 3 12a8.949 8.949 0 0 1 1.735-5.307m12.84 3.088A5.98 5.98 0 0 1 18 12a30 30 0 0 1-.464 6.232M6 12a6 6 0 0 1 9.352-4.974M4 21a5.964 5.964 0 0 1 1.01-3.328 5.15 5.15 0 0 0 .786-1.926m8.66 2.486a13.96 13.96 0 0 1-.962 2.683M7.5 19.336C9 17.092 9 14.845 9 12a3 3 0 1 1 6 0c0 .749 0 1.521-.031 2.311M12 12c0 3 0 6-2 9" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Security & Wi-Fi</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="square" stroke-width="2"
                            d="M8 15h7.01v.01H15L8 15Z" />
                        <path stroke="currentColor" stroke-linecap="square" stroke-width="2"
                            d="M20 6H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Z" />
                        <path stroke="currentColor" stroke-linecap="square" stroke-width="2"
                            d="M6 9h.01v.01H6V9Zm0 3h.01v.01H6V12Zm0 3h.01v.01H6V15Zm3-6h.01v.01H9V9Zm0 3h.01v.01H9V12Zm3-3h.01v.01H12V9Zm0 3h.01v.01H12V12Zm3 0h.01v.01H15V12Zm3 0h.01v.01H18V12Zm0 3h.01v.01H18V15Zm-3-6h.01v.01H15V9Zm3 0h.01v.01H18V9Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Computer Peripherals</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Phone Accessories</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Watches</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M16.444 18H19a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h2.556M17 11V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Printers</span>
                </a>

                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Projectors</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Skin Care</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z">
                        </path>
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Photo/Video</span>
                </a>
                <a href="#"
                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M10 12v1h4v-1m4 7H6a1 1 0 0 1-1-1V9h14v9a1 1 0 0 1-1 1ZM4 5h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Office Supplies</span>
                </a>
            </div>
        </div>
    </section>
@endsection

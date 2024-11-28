@extends('layouts.app')

@section('content')
    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                    Install the "flowbite-typography" NPM package to apply styles and format the article content:
                                                                                                                                                                                                                                                                                                                                                                                                                                                    URL: https://flowbite.com/docs/components/typography/
                                                                                                                                                                                                                                                                                                                                                                                                                                                -->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <div class="flex justify-between">
                        <span
                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $article->category->name }}</span>
                        <span class="text-slate-400">{{ $article->created_at->format('D, M Y') }}</span>
                    </div>
                    {{-- <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">Jese
                                    Leos</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO
                                    Flowbite</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                        title="February 8th, 2022">{{ $article->created_at->format('D, M Y') }}</time></p>
                            </div>
                        </div>
                    </address> --}}
                    <h1
                        class="mt-4 text-3xl text-justify font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {!! $article->title !!}</h1>
                </header>
                <div class="text-justify">
                    {!! $article->content !!}
                </div>
            </article>
        </div>
    </main>

    <aside aria-label="Related articles" class="py-8 lg:py-16 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl flex flex-col items-center md:items-start">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Artikel terkait</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($relatedArticles as $relatedArticle)
                    <article class="max-w-xs">
                        <a href="{{ route('article.show', $relatedArticle->slug) }}">
                            <img src="{{ asset('storage/' . $relatedArticle->thumbnail) }}"
                                class="w-full h-[180px] object-cover mb-5 rounded-lg" alt="Image 1">
                        </a>
                        <h2 class="mb-2 text-xl text-justify font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ route('article.show', $relatedArticle->slug) }}">{{ $relatedArticle->title }}</a>
                        </h2>
                        {{-- <p class="mb-4 text-gray-500 dark:text-gray-400">{{ Str::limit($relatedArticle->content, 100) }}</p> --}}
                        <a href="{{ route('article.show', $relatedArticle->slug) }}"
                            class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                            Baca selengkapnya
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </aside>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Kotak
                    Saran</h2>
                <p class="mx-auto mb-8 max-w-2xl text-justify  text-gray-500 md:mb-8 sm:text-xl dark:text-gray-400">Kami
                    ingin terus
                    berkembang bersama Anda. Berikan saran terbaik Anda, dan mari wujudkan layanan yang lebih
                    baik untuk semua.
                </p>
                <form action="{{ route('suggestion.store') }}" method="POST">
                    @csrf
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="body"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saran</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-9 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Tulis saran anda" type="text" name="body" id="body" required="">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:ring-amber-900 rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

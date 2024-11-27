@extends('layouts.app')

@section('content')
    <section class="max-w-screen-xl mx-4 md:mx-auto pb-16" id="blog">
        <div class="flex flex-col items-center py-12">
            <h4 class="text-2xl font-bold">Blog</h4>
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
                        <div class="py-3 font-normal text-gray-700 dark:text-gray-400 text-justify">
                            {!! Str::limit($article->content, 200) !!}
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
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </section>
@endsection

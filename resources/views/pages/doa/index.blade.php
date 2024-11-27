@extends('layouts.app')

@section('content')
    <section class="px-4 mx-auto max-w-screen-xl" id="doa-index">
        <h2 class="text-center text-2xl font-semibold py-12">Kumpulan Doa</h2>


        <div class="md:flex justify-center">
            <div class="max-w-3xl">
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

                @foreach ($doas as $doa)
                    <div class="py-4">
                        <h4 class="font-medium text-center text-xl">{{ $doa->title }}</h4>
                        <p class="text-end text-3xl py-8">{{ $doa->arabic_text }}</p>
                        <p class="text-justify text-lg mb-3">{{ $doa->transliteration }}</p>
                        <p class="text-justify text-base text-slate-500">{{ $doa->meaning }}</p>
                    </div>
                @endforeach
                <div class="py-10">
                    {{ $doas->links() }}
                </div>
            </div>
        </div>

    </section>
@endsection

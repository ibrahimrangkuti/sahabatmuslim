@extends('layouts.app')

@section('content')
    <section class="px-4 mx-auto max-w-screen-xl" id="doa-index">
        <h2 class="text-center text-xl font-semibold py-12">Kumpulan Doa</h2>
        <div class="flex gap-2 overflow-auto whitespace-nowrap justify-center">
            @foreach ($categoryDoas as $category)
                <a href="" class="inline-block text-center px-4 py-2 border border-red-500">{{ $category->name }}</a>
            @endforeach
        </div>
    </section>
@endsection

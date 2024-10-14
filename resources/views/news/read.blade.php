@extends('layouts.app')

@section('content')
    <div class="w-[70%]">
        <div class="mb-4 flex w-full items-center justify-center">
            <img class="h-auto w-[60%]" src={{ $selectedNews['image'] }} alt="">
        </div>
        <h2 class="mb-4 text-2xl">{{ $selectedNews['title'] }}</h2>

        {!! $selectedNews['description'] !!}
    </div>
    <aside class="w-[25%]">
        @include('components.aside')
    </aside>
@endsection

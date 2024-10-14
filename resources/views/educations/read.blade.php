@extends('layouts.app')

@section('content')
    <div class="w-[70%]">
        <div class="flex w-full items-center justify-center">
            <img class="h-auto w-full" src={{ $selectedENC['image'] }} alt="">
        </div>
        <h2 class="mb-4 mt-8 text-2xl font-semibold">{{ $selectedENC['title'] }}</h2>

        {!! $selectedENC['description'] !!}
    </div>
    <aside class="w-[25%]">
        @include('components.aside')
    </aside>
@endsection

@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">
        <h2 class="mb-4 text-xl font-semibold lga:text-3xl">Educations & Careers</h2>
        @foreach (array_chunk($ENC, 3) as $chunkIndex => $chunk)
            <div class="mt-4 flex flex-col gap-4 lga:flex-row">
                @foreach ($chunk as $encIndex => $en1)
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <div class="flex h-[205px] items-center justify-center">
                                <img class="max-h-full w-auto rounded-tl-lg rounded-tr-lg" src={{ $en1['image'] }}
                                    alt="">
                            </div>
                            <div class="p-2">
                                <p class="py-2 text-sm font-semibold text-[--var-text-secondary] lga:text-base">
                                    {{ $en1['date'] }}</p>
                                <h3 class="text-base font-medium lga:text-lg ">{{ $en1['title'] }}</h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/educations/read/{{ $chunkIndex * 3 + $encIndex + 1 }}"
                                class="text-sm tracking-wider lga:text-lg">READ MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection

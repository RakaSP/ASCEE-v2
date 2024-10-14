@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">
        <section id="events" class="">
            <h2 class="mb-4 text-xl font-semibold lga:text-3xl">Conferences</>
                <div class="mt-4">
                    <div class="flex h-full flex-col gap-4 lga:flex-row">
                        @foreach ($conferences as $index => $conference)
                            <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                                <div>
                                    <div class="flex h-[200px] items-center justify-center p-4">
                                        <img class="max-h-full w-auto rounded-tl-lg rounded-tr-lg"
                                            src={{ $conference['image'] }} alt="">
                                    </div>
                                    <div class="p-2">
                                        <p class="py-2 text-sm font-semibold text-[--var-text-secondary] lga:text-base">
                                            {{ $conference['date'] }}</p>
                                        <h3 class="text-base font-medium lga:text-lg">
                                            {{ $conference['title'] }}
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                                    <a href="/conferences/read/{{ $index + 1 }}"
                                        class="text-sm tracking-wider lga:text-lg">READ
                                        MORE</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection

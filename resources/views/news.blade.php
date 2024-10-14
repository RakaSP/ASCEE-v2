@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">
        <section id="news" class="border-b-2 pb-6">
            <h2 class="mb-4 text-xl font-semibold lga:text-3xl">Events</>
                <div class="mt-4">
                    <div class="flex flex-col gap-2 lga:gap-4">
                        @foreach ($pagedNews as $index => $news)
                            <div class="flex w-full flex-col items-center gap-6 border-b-2 pb-4 lga:flex-row">
                                <div class="flex w-full justify-center lga:aspect-video lga:max-w-[213px]">
                                    <img src="{{ $news['image'] }}" alt="" class="lga:max-h-full lga:w-auto">
                                </div>
                                <div class="p-2">
                                    <h3 class="text-sm font-semibold lga:text-lg ">
                                        {{ $news['title'] }}
                                    </h3>
                                    <p
                                        class="py-1 text-sm font-semibold text-[--var-text-secondary] lga:py-2 lga:text-base">
                                        {{ $news['date'] }}
                                    </p>
                                    <div class="mt-1 flex items-center gap-6 lga:mt-2">
                                        <a href="/news/read/{{ ($currentPage - 1) * 10 + $index + 1 }}"
                                            class="flex items-center gap-6 fill-[--var-highlight] text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow] lga:mt-2">
                                            <p class="text-sm tracking-wider lga:text-lg">READ
                                                MORE</p>
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4 flex justify-center gap-4 text-base">
                        @php

                            $totalPages = $totalPages;
                        @endphp

                        @if ($currentPage > 1)
                            <a href="{{ url('news/1') }}"
                                class="flex h-8 w-8 items-center justify-center rounded-md border-2 text-[--var-highlight]">

                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
                                </svg>
                            </a>
                        @endif

                        @if ($currentPage > 1)
                            <a href="{{ url('news/' . ($currentPage - 1)) }}"
                                class="flex h-8 w-8 items-center justify-center rounded-md border-2 text-[--var-highlight]">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                </svg>
                            </a>
                        @endif
                        @for ($i = 1; $i <= $totalPages; $i++)
                            @if ($i == $currentPage)
                                <span
                                    class="flex h-8 w-8 items-center justify-center rounded-md border-2 bg-[--var-highlight] text-white">{{ $i }}</span>
                            @else
                                <a href="{{ url('news/' . $i) }}"
                                    class="flex h-8 w-8 items-center justify-center rounded-md border-2 text-[--var-highlight]">{{ $i }}</a>
                            @endif
                        @endfor

                        @if ($currentPage < $totalPages)
                            <a href="{{ url('news/' . ($currentPage + 1)) }}"
                                class="flex h-8 w-8 items-center justify-center rounded-md border-2 text-[--var-highlight]">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                </svg>
                            </a>
                        @endif

                        @if ($currentPage < $totalPages)
                            <a href="{{ url('news/' . $totalPages) }}"
                                class="flex h-8 w-8 items-center justify-center rounded-md border-2 text-[--var-highlight]">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </a>
                        @endif
                    </div>

                </div>
        </section>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection

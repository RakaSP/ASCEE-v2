@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">
        <div class="border-b-2 pb-6">
            <h2 class="mb-4 text-xl font-semibold lga:text-3xl">Journal</h2>
            <div class="flex flex-col gap-6">
                @foreach (array_chunk($journals, 3) as $journalGroup)
                    <div class="flex h-full flex-col gap-4 lga:flex-row">
                        @foreach ($journalGroup as $journal)
                            <div class="flex flex-[33%] flex-col rounded-lg border-2 lga:max-w-[33%]">
                                <div class="flex h-[200px] items-center justify-center p-4">
                                    <img class="max-h-full w-auto" src="{{ $journal['image'] }}" alt="">
                                </div>
                                <article class="flex h-full flex-col justify-between">
                                    <h3
                                        class="flex flex-1 justify-center p-2 text-center text-base lga:text-lg ">
                                        {{ $journal['title'] }}
                                    </h3>
                                    <div class="flex w-full flex-row border-t-2 text-center">
                                        <a href="{{ $journal['urlIndex'] }}"
                                            class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap border-l-2 p-2 text-sm text-[--var-highlight] hover:bg-[--var-highlight] hover:text-white lga:text-base"
                                            title="View Journal">
                                            View Journal
                                        </a>
                                        <a href="{{ $journal['urlSubmission'] }}"
                                            class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap border-l-2 p-2 text-sm text-[--var-highlight] hover:bg-[--var-highlight] hover:text-white lga:text-base"
                                            title="Submission">
                                            Submission
                                        </a>
                                    </div>

                                </article>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection

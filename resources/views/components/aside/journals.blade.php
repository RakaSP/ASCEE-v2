@if (isset($asideJournals))
    <div class="mb-6 w-full rounded-md border-2">
        <header class="border-b-2 px-4 py-2 text-2xl font-semibold">Journals</header>
        <div class="relative w-full overflow-hidden">
            <div id="slider" class="flex w-[900%] animate-slide2">
                @foreach ($asideJournals as $journal)
                    <div class="box-border flex h-full flex-[0_0_11.1%] flex-col justify-around p-[20px] text-center">
                        <img src="{{ $journal['image'] }}" alt="{{ $journal['title'] }}" />
                        <button
                            class="mt-4 rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow]"><a
                                href="{{ $journal['urlIndex'] }}" target="_blank" rel="noopener noreferrer">View
                                Journal</a></button>
                    </div>
                @endforeach
            </div>

            <div class="z-1 absolute bottom-10 flex w-full justify-center gap-2">
                @for ($i = 0; $i < count($asideJournals); $i++)
                    <div class="dot h-2 w-2 cursor-pointer rounded-[50%] bg-white" data-slide="{{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endif

@php
    $perPageEvent = 3;
    $totalEvents = isset($asideEvents) ? count($asideEvents) : 0;
    $totalPagesEvent = ceil($totalEvents / $perPageEvent);
@endphp

@if ($totalEvents > 0)
    <div class="mb-6 w-full rounded-md border-2">
        <header class="border-b-2 px-4 py-2 text-2xl font-semibold">Events</header>
        <div class="flex w-full flex-col" id="events-list">
            @foreach ($asideEvents as $events)
                <div class="events-item hidden p-2">
                    <div
                        class="card flex flex-col items-center rounded-md border bg-slate-50 p-4 text-center shadow-[0_0_2px_rgba(0,0,0,0.3)]">
                        <img src="{{ $events['image'] }}" alt="{{ $events['title'] }}" class="mt-2 h-32 rounded-md">
                        <h3 class="mt-4 font-semibold xla:text-base x2la:text-lg">{{ $events['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $events['date'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="my-4 flex justify-center px-4" id="pagination">
            @for ($i = 1; $i <= $totalPagesEvent; $i++)
                <div class="pageEvents-number-events mx-1 cursor-pointer" onclick="changePage({{ $i }})"
                    id="pageEvents-{{ $i }}">
                    <div
                        class="flex items-center justify-center rounded-full border border-gray-400 transition-colors duration-300 hover:bg-blue-500 hover:text-white xla:h-6 xla:w-6 x2la:h-8 x2la:w-8">
                        {{ $i }}
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endif

<script>
    const perPageEvent = {{ $perPageEvent }};
    const totalEvents = {{ $totalEvents }};
    const totalPagesEvent = {{ $totalPagesEvent }};
    console.log(totalEvents)
    const eventsItem = document.querySelectorAll('.events-item');
    let currentPageEvent = 1;

    function changePage(pageEvents) {
        currentPageEvent = pageEvents;
        const startEvent = (currentPageEvent - 1) * perPageEvent;
        const endEvent = startEvent + perPageEvent;

        eventsItem.forEach((item, index) => {
            item.classList.add('hidden');
            if (index >= startEvent && index < endEvent) {
                item.classList.remove('hidden');
            }
        });

        const pageNumbersEvents = document.querySelectorAll('.pageEvents-number-events');
        pageNumbersEvents.forEach((el, index) => {
            if (index + 1 === currentPageEvent) {
                el.classList.add('active');
            } else {
                el.classList.remove('active');
            }
        });
    }

    if (totalEvents > 0) {
        changePage(currentPageEvent);
    }
</script>

<style>
    .pageEvents-number-events.active .flex {
        background-color: #3B82F6;
        color: white;
    }
</style>

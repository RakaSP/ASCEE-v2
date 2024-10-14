@php
    $perPageNews = 3;
    $totalNews = isset($asideNews) ? count($asideNews) : 0;
    $totalPagesNews = ceil($totalNews / $perPageNews);
@endphp

@if ($totalNews > 0)
    <div class="mb-6 w-full rounded-md border-2">
        <header class="border-b-2 px-4 py-2 text-2xl font-semibold">News</header>
        <div class="flex w-full flex-col" id="news-list">
            @foreach ($asideNews as $news)
                <div class="news-item hidden p-2">
                    <div
                        class="card flex flex-col items-center rounded-md border bg-slate-100 p-4 text-center shadow-[0_0_2px_rgba(0,0,0,0.3)]">
                        <img src="{{ $news['image'] }}" alt="{{ $news['title'] }}" class="mt-2 h-32 rounded-md">
                        <h3 class="mt-4 font-semibold xla:text-base x2la:text-lg">{{ $news['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $news['date'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="my-4 flex justify-center px-4" id="pagination">
            @for ($i = 1; $i <= $totalPagesNews; $i++)
                <div class="pageNews-number mx-1 cursor-pointer" onclick="changePage({{ $i }})"
                    id="pageNews-{{ $i }}">
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
    const perPageNews = {{ $perPageNews }};
    const totalNews = {{ $totalNews }};
    const totalPagesNews = {{ $totalPagesNews }};
    const newsItems = document.querySelectorAll('.news-item');
    let currentPageNews = 1;

    function changePage(pageNews) {
        currentPageNews = pageNews;
        const startNews = (currentPageNews - 1) * perPageNews;
        const endNews = startNews + perPageNews;

        newsItems.forEach((item, index) => {
            item.classList.add('hidden');
            if (index >= startNews && index < endNews) {
                item.classList.remove('hidden');
            }
        });

        const pageNumbersNews = document.querySelectorAll('.pageNews-number');
        pageNumbersNews.forEach((el, index) => {
            if (index + 1 === currentPageNews) {
                el.classList.add('active');
            } else {
                el.classList.remove('active');
            }
        });
    }

    if (totalNews > 0) {
        changePage(currentPageNews);
    }
</script>

<style>
    .pageNews-number.active .flex {
        background-color: #3B82F6;
        color: white;
    }
</style>

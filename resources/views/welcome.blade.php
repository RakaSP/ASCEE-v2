@extends('layouts.app')
@php
    $banners = [
        [
            'id' => 'banner1',
            'image' => '/build/assets/images/home-banner1.jpg',
            'title' => 'Penerima 2nd ASCEE Scholarship TA 2020/2021',
            'link' => '/news/read/1',
            'number' => '1',
        ],
        [
            'id' => 'banner2',
            'image' => '/build/assets/images/home-banner2.png',
            'title' => 'Penerima ASCEE Editor Grant 2020',
            'link' => '/news/read/2',
            'number' => '2',
        ],
        [
            'id' => 'banner3',
            'image' => '/build/assets/images/home-banner3.png',
            'title' => 'ASCEE Student Indonesia gelar webinar "Tips & Trik Memulai Tugas"',
            'link' => '/news/read/3',
            'number' => '3',
        ],
    ];
@endphp
@section('content')
    <div class="w-full xla:w-[70%]">
        <div class="relative aspect-video w-full overflow-hidden rounded-md border-2 bg-slate-100">
            @foreach ($banners as $banner)
                <a href="{{ $banner['link'] }}" class="relative block">
                    <div id="{{ $banner['id'] }}"
                        class="{{ $loop->first ? 'absolute' : 'pointer-events-none absolute' }} opacity-{{ $loop->first ? '100' : '0' }} left-1/2 top-1/2 w-full -translate-x-1/2 -translate-y-1/2 p-4 transition-opacity duration-1000 lga:w-[85%] x2la:w-[80%]">
                        <img class="aspect-video object-contain" src="{{ $banner['image'] }}" alt="{{ $banner['title'] }}">
                        <div
                            class="absolute top-6 z-10 flex w-full -translate-y-1/2 flex-row gap-2 px-0 py-4 text-center lga:top-2 lga:gap-4 lga:px-4 x2la:top-0">
                            <div
                                class="x2la:min-h-16 lga:min-h-12 sma:min-h-8 x2la:min-w-16 lga:min-w-12 sma:min-w-8 flex items-center justify-center rounded-[50%] border-4 border-[--var-main] bg-[#cddae7] shadow-lg sma:text-[12px] lga:text-base">
                                {{ $banner['number'] }}
                            </div>
                            <div class="w-[70vw] max-w-[70vw] xla:w-[40vw] xla:max-w-[40vw]">
                                <div
                                    class="flex flex-[1_1_auto] items-center justify-center truncate whitespace-nowrap rounded-full bg-[#cddae7] px-4 py-1 text-black lga:h-10">
                                    <a
                                        class="truncate text-[clamp(0px,4vw,12px)] font-medium text-[#3D4853] lga:text-base">{{ $banner['title'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <section id="news" class="border-b-2 pb-6">
            <h2 class="my-4 text-xl font-semibold lga:text-3xl">News
                <a href="/news/1" class="text-sm font-medium text-[--var-highlight] underline lga:text-lg">View All</a>
            </h2>
            <div class="mt-4">
                <div class="flex h-full flex-col gap-4 lga:flex-row">
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <img src= '/build/assets/images/home-banner1.jpg' alt="">
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">06 Oct 2021
                                </p>
                                <h3 class="text-sm lga:text-lg">
                                    Pengumuman Hasil Akhir Penerima 2nd ASCEE Scholarship TA 2020/2021
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/news/read/1" class="text-sm tracking-wider lga:text-lg">READ MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <img src= '/build/assets/images/home-banner2.png' alt="">
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">01 Sep 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">Pengumuman Penerima ASCEE Editor
                                    Grant
                                    2020
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/news/read/2" class="text-sm tracking-wider lga:text-lg">READ MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <img src= '/build/assets/images/home-banner3.png' alt="">
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">29 Aug 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">ASCEE Student Indonesia gelar
                                    Webinar
                                    "Tips &
                                    Trik
                                    Memulai
                                    Tugas
                                    Akhir untuk
                                    Mahasiswa Galau
                                    di Tengah Kuliah Daring"</h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/news/read/3" class="text-sm tracking-wider lga:text-lg">READ MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="events" class="border-b-2 pb-6">
            <h2 class="my-4 text-xl font-semibold lga:text-3xl">Conferences & Events
                <a href="/events" class="text-sm font-medium text-[--var-highlight] underline lga:text-lg">View All</a>
            </h2>
            <div class="mt-4">
                <div class="flex h-full flex-col gap-4 lga:flex-row">
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <div class="flex h-[200px] items-center justify-center p-4">
                                <img class="max-h-full w-auto" src= '/build/assets/images/CNE1.jpeg' alt="">
                            </div>
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">29 Jul 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">
                                    ASCEE BLINK #1: Find ideas, Implement, and Research Result Publication
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/events/read/1" class="text-sm tracking-wider lga:text-lg">READ MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <div class="flex h-[200px] items-center justify-center p-4">
                                <img class="max-h-full w-auto" src= '/build/assets/images/CNE2.jpg' alt="">
                            </div>
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">18 Jul 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">International Conference on Health
                                    Science
                                    and Technology 2020 (ICHST)
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/conferences/read/1" class="text-sm tracking-wider lga:text-lg">READ
                                MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <div class="flex h-[200px] items-center justify-center p-4">
                                <img class="max-h-full w-auto" src= '/build/assets/images/CNE3.jpeg' alt="">
                            </div>
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">13 Jul 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">ASCEE Webinar: Data Science in
                                    Economics
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/events/read/2" class="text-sm tracking-wider lga:text-lg">READ MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="educations-and-careers" class="pb-6">
            <h2 class="my-4 text-xl font-semibold lga:text-3xl">Educations & Careers
                <a href="/educations" class="text-sm font-medium text-[--var-highlight] underline lga:text-lg">View
                    All</a>
            </h2>
            <div class="mt-4">
                <div class="flex h-full flex-col gap-4 lga:flex-row">
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <img src= '/build/assets/images/ENC1.jpeg' alt="">
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">13 Aug 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">
                                    [INFO] JOURNAL EDITOR GRANT untuk Kampus 2020
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/educations/read/1" class="text-sm tracking-wider lga:text-lg">READ
                                MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <img src= '/build/assets/images/ENC2.png' alt="">
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">04 Jul 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">2020 ASCEE International
                                    Scholarship
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/educations/read/2" class="text-sm tracking-wider lga:text-lg">READ
                                MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-[33%] flex-col justify-between rounded-lg border-2">
                        <div>
                            <img src= '/build/assets/images/ENC3.png' alt="">
                            <div class="p-2">
                                <p class="py-2 text-[12px] font-medium text-[--var-text-dimmed] lga:text-base">02 Jul 2020
                                </p>
                                <h3 class="text-sm lga:text-lg">ASCEE-Grammarly Premium Feture
                                </h3>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t-2 fill-[--var-highlight] p-2 text-[--var-highlight] hover:fill-[--var-darkyellow] hover:text-[--var-darkyellow]">
                            <a href="/educations/read/3" class="text-sm tracking-wider lga:text-lg">READ
                                MORE</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
    <script>
        const banners = [
            document.getElementById('banner1'),
            document.getElementById('banner2'),
            document.getElementById('banner3')
        ];
        let currentIndex = 0;

        function showNextBanner() {
            banners[currentIndex].classList.remove('opacity-100');
            banners[currentIndex].classList.add('opacity-0', 'pointer-events-none');

            currentIndex = (currentIndex + 1) % banners.length;

            banners[currentIndex].classList.remove('opacity-0', 'pointer-events-none');
            banners[currentIndex].classList.add('opacity-100');
        }

        setInterval(showNextBanner, 3000);
    </script>
@endsection

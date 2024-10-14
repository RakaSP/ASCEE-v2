@extends('layouts.app')

@section('content')
    <div class="w-[70%]">
        <div class="mb-4 flex w-full items-center justify-center">
            <img class="h-auto w-full" src={{ $selectedConference['image'] }} alt="">
        </div>
        <h2 class="mb-4 text-2xl">{{ $selectedConference['title'] }}</h2>

        <div class="space-y-4">
            <div class="flex">
                <div class="flex w-[20%] items-center">
                    <img class="h-6 w-6" src='/build/assets/images/Icons/calendar-days-solid.svg' alt="">
                    <span class="ml-4">Date</span>
                </div>
                <div class="ml-8">
                    {{ $selectedConference['date'] }}
                </div>
            </div>
            <div class="flex">
                <div class="flex w-[20%] items-center">
                    <img class="h-6 w-6" src='/build/assets/images/Icons/house-solid.svg' alt="">
                    <span class="ml-4">Place</span>
                </div>
                <div class="ml-8">
                    {{ $selectedConference['place'] }}
                </div>
            </div>
            <div class="flex">
                <div class="flex w-[20%] items-center">
                    <img class="h-6 w-6" src='/build/assets/images/Icons/globe-solid.svg' alt="">
                    <span class="ml-4">Website</span>
                </div>
                <div class="ml-8">
                    {{ $selectedConference['website'] }}
                </div>
            </div>
            <div class="flex">
                <div class="flex w-[20%] items-center">
                    <img class="h-6 w-6" src='/build/assets/images/Icons/phone-solid.svg' alt="">
                    <span class="ml-4">Contact</span>
                </div>
                <div class="ml-8">
                    {{ $selectedConference['contact'] }}
                </div>
            </div>
        </div>
    </div>
    <aside class="w-[25%]">
        @include('components.aside')
    </aside>
@endsection

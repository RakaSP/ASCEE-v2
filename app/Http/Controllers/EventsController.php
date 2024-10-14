<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index($index = 1)
    {
        $asideNews = app(AsideController::class)->asidenews();

        $events = $this->getEvents();

        $perPage = 10;
        $totalEvents = count($events);
        $totalPages = ceil($totalEvents / $perPage);

        $offset = ($index - 1) * $perPage;

        $pagedEvents = array_slice($events, $offset, $perPage);
        $currentPage = $index;
        return view('events', compact('pagedEvents', 'totalPages', 'currentPage', 'asideNews'));
    }


    public function readDetail($index = 1)
    {
        $events = $this->getEvents();
        $selectedEvent = $events[$index - 1];
        $asideNews = app(AsideController::class)->asidenews();
        return view('events.read', compact('selectedEvent', 'asideNews'));
    }

    public function getEvents()
    {
        return  [
            ['title' => 'ASCEE BLINK # 1: Find ideas, Implement, and Research Result Publication', 'date' => '29 Jul 2020', 'place' => ' Zoom Meeting or Youtube ASCEE Channel', 'website' => 'https://bit.ly/engineering_webinar', 'contact' => 'Nia Fitria ( +62 813-7404-4940 )', 'image' => asset('assets/events1.jpeg')],
            ['title' => 'ASCEE Webinar: Data Science in Economics', 'date' => '13 Jul 2020', 'place' => 'Zoom Meeting or Youtube ASCEE Channel', 'website' => 'https://bit.ly/3guyHJS', 'contact' => 'Andri Pranolo ( 081392554050 )', 'image' => asset('assets/events2.jpeg')],
            ['title' => 'WEBINAR on "How to Make Your Film More Cinematic"', 'date' => '09 Jul 2020', 'place' => 'Zoom Meeting', 'website' => 'http://bit.ly/WebinarFilm', 'contact' => 'Farhan Hidayatullah ( +86 131-5111-3025 )', 'image' => asset('assets/events3.jpg')],
            ['title' => 'Verbal Traditions and Pagebluk Myth in Java', 'date' => '28 Jun 2020', 'place' => 'Zoom Meeting', 'website' => ' http://bit.ly/WebinarASCEENasional', 'contact' => '+62 813-3753-8182 ( - )', 'image' => asset('assets/events4.jpeg')],
            ['title' => 'Online Meeting, Regional Development of West Lamong Bay', 'date' => '03 Jul 2020', 'place' => 'Zoom Meeting', 'website' => '-', 'contact' => '-(-)', 'image' => asset('assets/events5.jpg')],
            ['title' => 'The New Normal ASCEE Journal Workshop Batch #2', 'date' => '11 Jul 2020', 'place' => 'Zoom Meeting', 'website' => 'https://bit.ly/2YHCEnk', 'contact' => 'Sularso ( 0812220828827 )', 'image' => asset('assets/events6.jpeg')],
            ['title' => '[Journal Editor Series] Journal Management Part #7', 'date' => '28 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events7.jpg')],
            ['title' => '[Journal Editor Series] Journal Management Part #6', 'date' => '25 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events8.jpg')],
            ['title' => '[Journal Editor Series] Journal Management Part #5', 'date' => '18 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events9.jpg')],
            ['title' => '[Journal Editor Series] Journal Management Part #4', 'date' => '14 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events10.jpg')],
            ['title' => '[Journal Editor Series] Journal Management Part #3', 'date' => '11 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events11.jpg')],
            ['title' => '[Journal Editor Series] Journal Management Part #2', 'date' => '07 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events12.jpg')],
            ['title' => '[Journal Editor Series] Journal Management Part #1', 'date' => '04 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'https://s.id/AsceeWebShopEditorial', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events13.jpg')],
            ['title' => '[Journal SETUP Part#7] based on Principal and Scholarly Publishing', 'date' => '24 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events14.jpg')],
            ['title' => '[Journal SETUP Part#6] based on Principal and Scholarly Publishing', 'date' => '20 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events15.jpg')],
            ['title' => '[Journal SETUP Part#5] based on Principal and Scholarly Publishing', 'date' => '17 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events16.jpg')],
            ['title' => '[Journal SETUP Part#4] based on Principal and Scholarly Publishing', 'date' => '13 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events17.jpg')],
            ['title' => '[Journal SETUP Part#3] based on Principal and Scholarly Publishing', 'date' => '10 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events18.jpg')],
            ['title' => '[Journal SETUP Part#2] based on Principal and Scholarly Publishing', 'date' => '06 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events19.jpg')],
            ['title' => '[Journal SETUP Part#1] based on Principal and Scholarly Publishing', 'date' => '03 Feb 2020', 'place' => 'Zoom Meeting ID 501 501 2017', 'website' => 'http://s.id/AsceeWebShop', 'contact' => 'Zalik ( +628170414164 )', 'image' => asset('assets/events20.jpg')],
        ];
    }
}

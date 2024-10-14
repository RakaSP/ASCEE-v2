<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsideController extends Controller
{
    public function asidejournals(){
        $journals = app(JournalsController::class)->getJournals();
        return $journals;
    }
    public function asidenews()
    {
        $news = app(NewsController::class)->getNewsArticles();

        return $news;
    }
    public function asideevents(){
        $events = app(EventsController::class)->getEvents();
        return $events;
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\AsideController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\ENCController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\JournalsController;

// User routes
Route::get('/user/about', function () {
    $asideNews = app(AsideController::class)->asidenews();
    $asideEvents = app(AsideController::class)->asideevents();
    $contacts = app(AboutController::class)->index();
    return view('user.about', compact('asideNews', 'asideEvents', 'contacts'));
});

Route::get('/user/people', function () {
    $asideNews = app(AsideController::class)->asidenews();
    $asideEvents = app(AsideController::class)->asideevents();

    return view('user.people', compact('asideNews', 'asideEvents'));
});

Route::get('/user/contact', function () {
    $asideNews = app(AsideController::class)->asidenews();
    $asideEvents = app(AsideController::class)->asideevents();

    return view('user.contact', compact('asideNews', 'asideEvents'));
});

Route::get('/user/join', function () {
    // $asideEvents = app(AsideController::class)->asideevents();
    $asideNews = app(AsideController::class)->asidenews();
    $asideEvents = [];
    return view('user.join', compact('asideEvents', 'asideNews'));
});

Route::get('/user/benefit', function () {
    //$asideEvents = app(AsideController::class)->asideevents();
    $asideEvents = [];
    $asideNews = app(AsideController::class)->asidenews();

    return view('user.benefit', compact('asideEvents', 'asideNews'));
});


Route::get('/user/register', function () {
    return view('register');
});

Route::get('/user/join', function () {
    $asideEvents = app(AsideController::class)->asideevents();
    $asideNews = app(AsideController::class)->asidenews();

    return view('user.join', compact('asideEvents', 'asideNews'));
});


Route::get('/publication/journal', function () {
    $asideEvents = app(AsideController::class)->asideevents();
    $journals = app(JournalsController::class)->getJournals();
    return view('publication', compact('asideEvents', 'journals'));
});


Route::get('/news/read/{index?}', [NewsController::class, 'readDetail'])->name('selectedEvent');
Route::get('/news/{index?}', [NewsController::class, 'index'])->name('news');

Route::get('/educations/read/{index?}', [ENCController::class, 'readDetail'])->name('selectedENC');
Route::get('/educations', function () {
    //$asideEvents = app(AsideController::class)->asideevents();
    $ENC = app(ENCController::class)->getENC();
    $asideEvents = [];
    return view('educations', compact('asideEvents', 'ENC'));
});

Route::get('/events/read/{index?}', [EventsController::class, 'readDetail'])->name('selectedEvent');

Route::get('/events/{index?}', [EventsController::class, 'index'])->name('events');

Route::get('/conferences/read/{index?}', [ConferencesController::class, 'readDetail'])->name('selectedConference');
Route::get('/conferences', [ConferencesController::class, 'index'])->name('conferences');

Route::get('/', function () {
    $asideJournals = app(AsideController::class)->asidejournals();
    $asideEvents = app(AsideController::class)->asideevents();

    return view('welcome', compact('asideJournals', 'asideEvents'));
});

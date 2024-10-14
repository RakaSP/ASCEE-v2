<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    public function index()
    {
        $asideEvents = app(AsideController::class)->asideevents();
        $conferences = $this->getConferences();

        return view('conferences', compact('conferences', 'asideEvents'));
    }

    public function readDetail($index = 1)
    {
        $asideEvents = app(AsideController::class)->asideevents();
        $conferences = $this->getConferences();
        $selectedConference = $conferences[$index - 1];
        return view('conferences.read', compact('selectedConference', 'asideEvents'));
    }

    public function getConferences()
    {
        return [
            [
                'title' => 'ASCEE BLINK #1: Find ideas, Implement, and Research Result Publication',
                'image' => '/build/assets/images/conferences1.jpg',
                'date' => '29 Jul 2020',
                'place' => 'Universitas Aisyiyah (UNISA) Yogyakarta',
                'website' => 'https://ichst.unisayogya.ac.id/2020/',
                'contact' => 'Sri Sugesti ( +62877-3980-3053 )',
            ],

            [
                'title' => 'International Conference on Health Science and Technology 2020 (ICHST)',
                'image' => '/build/assets/images/conferences2.jpeg',
                'date' => '18 Jul 2020',
                'place' => 'Universitas Tadulako',
                'website' => 'http://icsitech.org/2020',
                'contact' => 'Dr. Anita Ahmad Kasim ( +62 812 4123 2008 )',
            ],

            [
                'title' => 'ASCEE Webinar: Data Science in Economics',
                'image' => '/build/assets/images/conferences3.jpeg',
                'date' => '13 Jul 2020',
                'place' => 'Universitas Tadulako',
                'website' => 'http://icosiet.org/2020/',
                'contact' => 'Dr. Anita Ahmad Kasim ( +62 812 4123 2008 )',
            ],

        ];
    }
}

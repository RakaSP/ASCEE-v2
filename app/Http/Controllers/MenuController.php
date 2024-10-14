<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $navbarItems = [
            [
                'label' => 'Home',
                'url' => '/home',
            ],
            [
                'label' => 'Membership',
                'url' => '',
                'subItems' => [
                    [
                        'label' => 'Membership Application',
                        'url' => '', 
                    ],
                    [
                        'label' => 'ASCEE Member Benefits',
                        'url' => '', 
                    ],
                    [
                        'label' => 'Why Join ASCEE',
                        'url' => '', 
                    ],
                ],
            ],
            [
                'label' => 'Publications',
                'url' => '',
            ],
            [
                'label' => 'Events',
                'url' => '',
            ],
            [
                'label' => 'Conferences',
                'url' => '',
            ],
            [
                'label' => 'Education & Careers',
                'url' => '',
            ],
            [
                'label' => 'News',
                'url' => '',
            ],
            [
                'label' => 'About',
                'url' => '',
                'subItems' => [
                    [
                        'label' => 'About Us',
                        'url' => '', 
                    ],
                    [
                        'label' => 'People',
                        'url' => '',
                    ],
                    [
                        'label' => 'Contact Us',
                        'url' => '', 
                    ],
                ],
            ],
        ];

        return view('layouts.app', compact('navbarItems'));
    }
}

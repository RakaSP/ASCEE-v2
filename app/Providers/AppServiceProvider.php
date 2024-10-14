<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $navbarItems = [
                [
                    'label' => 'Home',
                    'url' => '/',
                ],
                [
                    'label' => 'Membership',
                    'url' => '',
                    'subItems' => [
                        [
                            'label' => 'Application',
                            'url' => '/user/register', 
                        ],
                        [
                            'label' => 'Benefits',
                            'url' => '/user/benefit', 
                        ],
                        [
                            'label' => 'Why Join ASCEE?',
                            'url' => '/user/join', 
                        ],
                    ],
                ],
                [
                    'label' => 'Publications',
                    'url' => '/publication/journal',
                ],
                [
                    'label' => 'Events',
                    'url' => '/events/1',
                ],
                [
                    'label' => 'Conferences',
                    'url' => '/conferences',
                ],
                [
                    'label' => 'Education & Careers',
                    'url' => '/educations',
                ],
                [
                    'label' => 'News',
                    'url' => '/news/1',
                ],
                [
                    'label' => 'About',
                    'url' => '',
                    'subItems' => [
                        [
                            'label' => 'About Us',
                            'url' => '/user/about', 
                        ],
                        [
                            'label' => 'People',
                            'url' => '/user/people',
                        ],
                        [
                            'label' => 'Contact Us',
                            'url' => '/user/contact', 
                        ],
                    ],
                ],
            ];

            $asideNews = ['a', 'b'];

            $view->with('navbarItems', $navbarItems)
                ->with('asideNews', $asideNews);
        });
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalsController extends Controller
{
    public function getJournals()
    {
        $journals = [
            ['title' => 'International Journal of Education and Learning', 'image' => asset('assets/journal1.png'), 'urlIndex' => 'https://pubs2.ascee.org/index.php/ijele/index', 'urlSubmission' => 'https://pubs2.ascee.org/index.php/ijele/about/submissions#onlineSubmissions'],
            ['title' => 'International Journal of Visual and Performing Arts', 'image' => asset('assets/journal2.png'), 'urlIndex' => 'https://pubs2.ascee.org/index.php/ijcs', 'urlSubmission' => 'https://pubs2.ascee.org/index.php/ijcs/about/submissions#onlineSubmissions'],
            ['title' => 'International Journal of Robotics and Control Systems', 'image' => asset('assets/journal3.png'), 'urlIndex' => 'https://pubs2.ascee.org/index.php/viperarts', 'urlSubmission' => 'https://pubs2.ascee.org/index.php/viperarts/about/submissions#onlineSubmissions'],
            ['title' => 'Signal and Image Processing Letters', 'image' => asset('assets/journal4.png'), 'urlIndex' => 'https://pubs2.ascee.org/index.php/sitech', 'urlSubmission' => 'https://pubs2.ascee.org/index.php/sitech/about/submissions#onlineSubmissions'],
            ['title' => 'Bulletin of Social Informatics Theory and Application', 'image' => asset('assets/journal5.jpg'), 'urlIndex' => 'https://pubs2.ascee.org/index.php/IJRCS', 'urlSubmission' => 'https://pubs2.ascee.org/index.php/IJRCS/about/submissions#onlineSubmissions'],
            ['title' => 'International Journal of Communication and Society', 'image' => asset('assets/journal6.png'), 'urlIndex' => 'https://pubs2.ascee.org/index.php/sustain/index', 'urlSubmission' => 'https://pubs2.ascee.org/index.php/sustain/about/submissions#onlineSubmissions'],
            ['title' => 'Science in Information Technology Leters', 'image' => asset('assets/journal7.png'), 'urlIndex' => 'https://simple.ascee.org/index.php/simple', 'urlSubmission' => 'https://pubs.ascee.org/index.php/simple/about/submissions'],
            ['title' => 'Sustainability Policy and Human Geography', 'image' => asset('assets/journal8.png'), 'urlIndex' => 'https://pubs.ascee.org/index.php/ijabis/', 'urlSubmission' => 'https://pubs.ascee.org/index.php/ijabis/about/submissions'],
            ['title' => 'International Jorunal of Applied Business and Information Systems', 'image' => asset('assets/journal9.png'), 'urlIndex' => 'https://pubs.ascee.org/index.php/businta', 'urlSubmission' => 'https://pubs.ascee.org/index.php/businta/about/submissions'],
        ];

        return $journals;
    }
}

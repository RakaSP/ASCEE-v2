<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = [
            'Executive Officers' => [
                'Chair' => 'Sutarman, Assoc. Prof., S.Kom., M.Kom., Ph.D.',
                'Vice-Chair' => 'Aji Prasetya Wibawa, Assoc. Prof., Ph.D.',
                'Secretary' => [
                    'Haviluddin, Assist. Prof., Ph.D.',
                    'Nia Fitria, SM., BBA'
                ],
                'Treasurer' => 'Intan Tri Wahyuningtyas, AS.',
                'Members' => [
                    'Publication Director' => 'Andri Pranolo, Assist. Prof., S.Kom., M.Cs.',
                    'Research and Development Director' => [
                        'Silvia Santi',
                        'Adhi Prahara, Assist. Prof., M.Cs.',
                        'Supriyanto, Assist. Prof., M.Eng.'
                    ],
                    'Public Relation Director' => [
                        'Tuti Purwaningsing, Assist. Prof., M.Stats.',
                        'Rifky Dora Wijayanti, Assist. Prof., M.Sc.'
                    ]
                ],
            ],
            'Sections' => [
                'ASCEE Indonesia' => 'Ahmad Azhari, Assist. Prof., M.Eng.',
                'ASCEE P.R. China' => 'Su Zhe, Assist. Prof., M.Sn.',
                'ASCEE Australia' => 'Anusua Ghosh, Assoc. Prof., Ph.D.',
                'ASCEE Japan' => 'Mahdillah',
                'ASCEE Colombia' => 'Leonel Hernandez, Assist. Prof.',
                'ASCEE Pakistan' => 'Misbah, Ph.D.',
                'ASCEE India' => 'Nazima Rangwala Kalita',
                'ASCEE Malaysia' => 'Sarina Sulaiman, Assoc. Prof., Ph.D.',
                'ASCEE Ukraine' => 'Roman Voliansky, Assoc. Prof., Ph.D.'
            ],
            'Branches and Chapters' => [
                'ASCEE Student' => 'Farhan Hidayatullah',
                'ASCEE IoT and Smart Cities' => 'Fachrul Kurniawan, Dr.'
            ],
            'Societies' => [
                'Computer' => [
                    'Executive Committee' => [
                        'Edi Sutoyo, Assist. Prof.'
                    ],
                    'Members' => [
                        'Rafal Drezewski, Assoc. Prof.',
                        'Siti Mariyam Shamsuddin, Prof. Dr.',
                        'Shi-Jinn Horng, Prof. Dr.',
                        'Yezid Donoso, Prof. Dr.',
                        'Leonel Hernandez, Assoc. Prof.'
                    ]
                ],
                'Visual and Performing Arts (Viperarts)' => [
                    'Executive Committee' => [
                        'Yang Xifan, Prof. Dr.',
                        'Aton Rustandi Mulyana, Assoc. Prof.'
                    ],
                    'Members' => [
                        'Mumtaz Mokhtar, Dr.',
                        'Ponimin Ponimin, Assoc. Prof.',
                        'Kamarulzaman Muhamed Karim, Dr.',
                        'Yulriawan Dafri, Assoc. Prof.',
                        'Arsenio Nicolas, Prof.',
                        'Zulkarnain Mistortoify, Assoc. Prof.',
                        'Setyawan Jayantoro, Assist. Prof.',
                        'Joko Aswoyo, Assoc. Prof.',
                        'Peter Ardhianto, S.Sn., M.Sn.',
                        'Aris Setiawan, Assist. Prof.'
                    ]
                ],
                'Education' => [
                    'Executive Committee' => [
                        'Zaidatun Tasir, Prof., Ph.D.',
                        'Zalik Nuryana, Assist. Prof.'
                    ],
                    'Members' => [
                        'Intisar Ambu-Saidi, Ph.D.',
                        'Ika Maryani, Assist. Prof.',
                        'Syarief Fajaruddin',
                        'Aieman Ahmad Al-Omari, Professor., Ph.D.',
                        'Ramlee Mustapha, Prof., Ph.D.',
                        'Mahendran Maniam, Assoc. Prof.',
                        'Shazia Malik, Dr.',
                        'Godlove Ellioth Kiswaga.'
                    ]
                ],
                'Communication' => [
                    'Executive Committee' => [
                        'Luo Zhenglin, Prof., PhD.',
                        'Dani Fadillah, Assist. Prof.'
                    ],
                    'Members' => [
                        'Marie Nathalie Jauffret, Prof., PhD.',
                        'Hyung Jun Kim, Prof., Ph.D.',
                        'Nandini Lakshmikantha, Prof., Dr.',
                        'Estrella T Arroyo, Prof., Ph.D.',
                        'Georgios Tsourvakas, Assoc. Prof., PhD.',
                        'Padmakumar K, Assoc. Prof., PhD.',
                        'Abd El-Basit Ahmed Hashem Mahmoud, Assoc. Prof., PhD.',
                        'Muhammad Najih Farihanto, Assist. Prof.',
                        'Sherif Farouk Badran, Assist. Prof., Dr.',
                        'Sardar Ahmad Nazish, Assist. Prof., PhD.',
                        'Kevin Naidoo, Dr.',
                        'Tran Thi Ai Van',
                        'McMillan Mavuto Jere',
                        'Dong Hao'
                    ]
                ],
                'Medical' => [
                    'Executive Committee' => [
                        'Cicilia Marcella, dr., MBBS, M.M',
                        'Asep Santoso, dr., SpOT.'
                    ],
                    'Members' => [
                        'Shakeel Sarwar, dr., MBBS, M.S(Orthopedics).',
                        'Reviono Prof. Dr. dr., Sp.P(K).',
                        'Muhammad Ikhwan Zein, dr, Sp.KO.',
                        'Andari Wuri Astuti, S.SiT., MPH., Ph.D.'
                    ]
                ]
            ],
            'ASCEE Staff' => [
                'Gema Antika',
                'Muhammad Ryan',
                'Qoni',
                'Tri Andi'
            ]
        ];

        return view('user.people', compact('people'));
    }
}

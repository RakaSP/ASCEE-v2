<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $contacts = [
            'Indonesia' => [
                'addresses' => [
                    'Jl. Janti, Karangjambe 130B, Banguntapan, Bantul, Yogyakarta, Indonesia',
                    'Jl. S. Supriyadi, Trenggalek, Jawa Timur, Indonesia'
                ],
                'email' => 'indonesia@ascee.org'
            ],
            'Australia' => [
                'addresses' => [
                    '1, Mia Street, Modbury North, South Australia: 5092, Adelaide, Australia'
                ],
                'email' => 'australia@ascee.org'
            ],
            'Colombia' => [
                'addresses' => [
                    'Carrera 26#3A-161 Barranquilla, Colombia'
                ],
                'email' => ['colombia@ascee.org', 'lhernandez@ascee.org']
            ],
            'P.R. China' => [
                'addresses' => [
                    '122 Ninghai Road, Gulou District, Nanjing City, Jiangsu Province, P.R. China'
                ],
                'email' => 'china@ascee.org'
            ],
            'Japan' => [
                'addresses' => [
                    '150-39-201, Rouji 5 Choume, Minami-ku, Fukuoka-shi, Fukuoka-ken, Japan'
                ],
                'email' => 'japan@ascee.org'
            ]
        ];
        return $contacts;
    }
}

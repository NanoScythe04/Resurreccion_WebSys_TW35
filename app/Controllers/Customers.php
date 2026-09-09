<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Marco Angelo B. Grageda',
                'email' => 'mbgrageda@fit.edu.ph',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Viyonce Lexi J. Yazar',
                'email' => 'vjyazar@fit.edu.ph',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Sheryll Anne Marie D. Baccay',
                'email' => 'sdbaccay@fit.edu.ph',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Nico O. Resurreccion',
                'email' => 'ncresurreccion@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Rhodora O. Resurreccion',
                'email' => 'yengorogo@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}
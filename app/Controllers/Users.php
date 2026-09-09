<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Marco Angelo B. Grageda',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Viyonce Lexi J. Yazar',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Sheryll Anne Marie D. Baccay',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Nico O. Resurreccion',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Rhodora O. Resurreccion',
                'role' => 'Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}
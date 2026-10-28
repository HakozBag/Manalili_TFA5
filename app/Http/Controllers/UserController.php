<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'cyrus',
                'full_name' => 'Cyrus Manalili',
                'email' => 'cyrus.manalili@gmail.com',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'username' => 'charles',
                'full_name' => 'Charles Manalili',
                'email' => 'charles.manalili@gmail.com',
                'role' => 'Manager',
            ],
            [
                'id' => 3,
                'username' => 'reze',
                'full_name' => 'Reze Manalili',
                'email' => 'reze.manalili@gmail.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'username' => 'renz',
                'full_name' => 'Renz Rivera',
                'email' => 'renz.rivera@gmail.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 5,
                'username' => 'alejandrawr',
                'full_name' => 'Alejandrawr Sheesh',
                'email' => 'alejandrawr.sheesh@gmail.com',
                'role' => 'Staff',
            ],
        ];

        return view('users.index', compact('users'));
    }
}
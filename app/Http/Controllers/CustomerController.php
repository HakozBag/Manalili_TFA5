<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'full_name' => 'Cyrus Manalili',
                'email' => 'cyrus.manalili@gmail.com',
                'phone' => '09170000001',
            ],
            [
                'id' => 2,
                'full_name' => 'Charles Manalili',
                'email' => 'charles.manalili@gmail.com',
                'phone' => '09170000002',
            ],
            [
                'id' => 3,
                'full_name' => 'Reze Manalili',
                'email' => 'reze.manalili@gmail.com',
                'phone' => '09170000003',
            ],
            [
                'id' => 4,
                'full_name' => 'Renz Rivera',
                'email' => 'renz.rivera@gmail.com',
                'phone' => '09170000004',
            ],
            [
                'id' => 5,
                'full_name' => 'Alejandrawr Sheesh',
                'email' => 'alejandrawr.sheesh@gmail.com',
                'phone' => '09170000005',
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}
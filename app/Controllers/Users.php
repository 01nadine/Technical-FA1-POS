<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',

            'users' => [
                [
                    'username'  => 'admin01',
                    'full_name' => 'Angela Cruz',
                    'role'      => 'Administrator',
                ],
                [
                    'username'  => 'cashier01',
                    'full_name' => 'Ben Santos',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'cashier02',
                    'full_name' => 'Claire Reyes',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'manager01',
                    'full_name' => 'Daniel Garcia',
                    'role'      => 'Manager',
                ],
                [
                    'username'  => 'staff01',
                    'full_name' => 'Ella Mendoza',
                    'role'      => 'Staff',
                ],
            ],
        ];

        return view('users', $data);
    }
}
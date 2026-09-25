<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'User Accounts',
            'users' => array(
                array('username' => 'admin', 'fullname' => 'Lei Vincent Gonzales', 'role' => 'Administrator'),
                array('username' => 'manager', 'fullname' => 'Kim Cavanas', 'role' => 'Manager'),
                array('username' => 'cashier', 'fullname' => 'Jami Magat', 'role' => 'Cashier'),
                array('username' => 'staff1', 'fullname' => 'Nicole Gonzales', 'role' => 'Staff'),
                array('username' => 'staff2', 'fullname' => 'Lara Pamintuan', 'role' => 'Staff')
            )
        );

        return view('partials/header', $data) 
             . view('users', $data) 
             . view('partials/footer');
    }
}
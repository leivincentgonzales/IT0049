<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Customer Accounts',
            'customers' => array(
                array('name' => 'Shem James Caayon', 'email' => 'sjcaayon@gmail.com', 'phone' => '09933046712'),
                array('name' => 'Inocencio Ivan Guillermo', 'email' => 'iiguillermo@gmail.com', 'phone' => '09124537698'),
                array('name' => 'John Matthew Rosete', 'email' => 'jrosete@gmail.com', 'phone' => '09541534267'),
                array('name' => 'Althea Gonzales', 'email' => 'agonzales@gmail.com', 'phone' => '09641677658'),
                array('name' => 'Ezer Matthew Sta. Maria', 'email' => 'emstamaria@gmail.com', 'phone' => '09763246784')
            )
        );

        return view('partials/header', $data) 
             . view('customers', $data) 
             . view('partials/footer');
    }
}
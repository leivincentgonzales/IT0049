<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About the Developer'
        ];

        return view('partials/header', $data)
            . view('about', $data)
            . view('partials/footer');
    }
}
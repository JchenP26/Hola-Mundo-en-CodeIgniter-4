<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'mensaje' => 'César Chén.'
        ];
        

        return view('home_view', $data);
    }
}

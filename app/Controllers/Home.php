<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home",
            "nama" => "Agas",
        ];
        return view('home', $data);
    }
}

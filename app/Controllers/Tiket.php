<?php

namespace App\Controllers;

class Tiket extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Tiket",
        ];
        return view('tiket', $data);
    }
}

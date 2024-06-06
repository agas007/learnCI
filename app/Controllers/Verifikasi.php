<?php

namespace App\Controllers;

class Verifikasi extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Verifikasi",
        ];
        return view('verifikasi', $data);
    }

    public function monitor()
    {
        $data = [
            "title" => "Monitoring Verifikasi",
        ];
        return view('verifikasi/monitor', $data);
    }
}

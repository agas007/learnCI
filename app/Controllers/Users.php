<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Users",
        ];
        return view('users', $data);
    }
}

<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = $this->usersModel->findAll();

        $data = [
            "title" => "Users",
            "users" => $users,
        ];

        return view('users', $data);
    }
}

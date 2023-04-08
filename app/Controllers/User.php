<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'User',
            'page' => 'v_user',
            'menu' => 'user',
            'submenu' => ''
        ];
        return view('v_template', $data);
    }
}

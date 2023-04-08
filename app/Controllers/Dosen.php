<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Menu Dosen',
            'page' => 'v_dosen',
            'menu' => 'master-data',
            'submenu' => 'dosen'
        ];
        return view('v_template', $data);
    }
}

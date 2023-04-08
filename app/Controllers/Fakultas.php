<?php

namespace App\Controllers;

class Fakultas extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Menu Fakultas',
            'page' => 'v_fakultas',
            'menu' => 'master-data',
            'submenu' => 'fakultas'
        ];
        return view('v_template', $data);
    }
}

<?php

namespace App\Controllers;

class Prodi extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Menu Prodi',
            'page' => 'v_prodi',
            'menu' => 'master-data',
            'submenu' => 'prodi'
        ];
        return view('v_template', $data);
    }
}

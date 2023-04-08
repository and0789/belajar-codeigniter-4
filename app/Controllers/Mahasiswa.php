<?php

namespace App\Controllers;

use App\Models\ModelMahasiswa;
use Config\Services;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelMahasiswa = new ModelMahasiswa();
    }

    public function index()
    {
        $data = [
            'judul' => 'Mahasiswa',
            'page' => 'mahasiswa/v_mahasiswa',
            'menu' => 'master-data',
            'submenu' => 'mahasiswa',
            'mhs' => $this->ModelMahasiswa->AllData(),
        ];
        return view('v_template', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Tambah Mahasiswa',
            'page' => 'mahasiswa/v_tambah',
            'menu' => 'master-data',
            'submenu' => 'mahasiswa',

        ];
        return view('v_template', $data);
    }

    public function InsertData()
    {
        if ($this->validate([
            'nim' => [
                'label' => 'nim mahasiswa',
                'rules' => 'required|is_unique[tbl_mahasiswa.nim]',
                'errors' => [
                    'required' => '{field} Wajib di isi',
                    'is_unique' => '{field} Sudah ada, input nim lain',
                ]
            ],

            'nama_mahasiswa' => [
                'label' => 'nama mahasiswa',
                'rules' => 'required|is_unique[tbl_mahasiswa.nim]',
                'errors' => [
                    'required' => '{field} Wajib di isi',
                ]
            ],


        ])) {
            echo "success";
        } else {
            session()->setFlashdata('errors', Services::validation()->getErrors());
            return redirect()->to(base_url('Mahasiswa/Tambah'))
                ->withInput('validation', Services::validation());
        }

// Version 2
//        $rules = [
//            'nim' => [
//                'label' => 'Nim Mahasiswa',
//                'rules' => 'required|is_unique[tbl_mahasiswa.nim]|max_length[8]',
//                'errors' => [
//                    'required' => '{field} Wajib Diisi !!!',
//                    'is_unique' => '{field} Sudah Ada, Input NIM Lain !!!',
//                    'max_length' => '{field} tidak valid'
//                ]
//            ],
//
//            'nama_mahasiswa' => [
//                'label' => 'Nama Mahasiswa',
//                'rules' => 'required|max_length[50]',
//                'errors' => [
//                    'required' => '{field} Wajib Diisi !!!',
//                    'max_length' => '{field} tidak valid'
//                ]
//            ],
//
//            'tempat_lahir' => [
//                'label' => 'Tempat Lahir',
//                'rules' => 'required',
//                'errors' => [
//                    'required' => '{field} Wajib Diisi !!!',
//                ]
//            ],
//
//            'tgl_lahir' => [
//                'label' => 'Tanggal Lahir',
//                'rules' => 'required',
//                'errors' => [
//                    'required' => '{field} Wajib Diisi !!!',
//                ]
//            ],
//
//            'jenis_kelamin' => [
//                'label' => 'Jenis Kelamin',
//                'rules' => 'required',
//                'errors' => [
//                    'required' => '{field} Wajib Diisi !!!',
//                ]
//            ],
//        ];
//
//        if (!$this->validate($rules)) {
//            $errors = \Config\Services::validation()->getErrors();
//            session()->setFlashdata('error', 'Data gagal ditambahkan !!!');
//            return redirect()->to(base_url('Mahasiswa/tambah'))->withInput()->with('errors', $errors);
//        } else {
//
//            # jika valid
//            $data = [
//                'nim' => $this->request->getVar('nim'),
//                'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
//                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
//                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
//                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
//            ];
//            $this->ModelMahasiswa->InsertData($data);
//            session()->setFlashdata('insert', 'Data berhasil ditambahkan !!!');
//            return redirect()->to(base_url('Mahasiswa'));
//
//        }
    }
}

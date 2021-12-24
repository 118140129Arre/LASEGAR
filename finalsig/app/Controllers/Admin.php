<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Admin extends BaseController
{

    protected $HomeModel;
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }


    public function index()
    {
        if (session()->get('user_name') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $Home = $this->HomeModel->search($keyword);
        } else {
            $Home = $this->HomeModel;
        }

        $data = [
            'title' => 'Admin',
            'Home1' => $Home->paginate(1, 'Home1'),
            'Home2' => $Home->paginate(2, 'Home2'),
            'Home3' => $Home->paginate(3, 'Home3'),
            'Home4' => $Home->paginate(4, 'Home4'),
            'Home5' => $Home->paginate(5, 'Home5'),
            'Home6' => $Home->paginate(6, 'Home6'),
            'Home7' => $Home->paginate(7, 'Home7'),
            'Home8' => $Home->paginate(8, 'Home8'),
            'Home9' => $Home->paginate(9, 'Home9'),
            'Home10' => $Home->paginate(10, 'Home10'),
            'Home11' => $Home->paginate(11, 'Home11'),
            'pager' => $this->HomeModel->pager
        ];
        return view('admin/index', $data);
    }

    public function detail($kecamatan)
    {

        $data = [
            'title' => 'Detail Admin',
            'Home' => $this->HomeModel->getHome($kecamatan)
        ];
        return view('admin/detail', $data);
    }

    public function edit($id)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data = [
            'title' => 'Edit Admin',
            'Home' => $this->HomeModel->getProduct($id)

        ];
        // Mengirim data ke dalam view
        return view('admin/editdata', $data);
    }

    public function update($id)
    {

        // untuk validasi form
        if (!$this->validate([
            'jumdesa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tpstt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tpstd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'tpsttd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'fbabjs' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'fbabju' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'fbabbj' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'patipal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'patsawah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'patlt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'patl' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'splcdl' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'splcrs' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'splcd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'splcsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],



            'sauma' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saumdm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saumtm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saumaiu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saums' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saumd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],



            'saucma' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saucdm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'sauctm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saucaiu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saucs' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'saucd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
            // print_r($this->request->getVar());

        }

        // Mengambil value dari form dengan method POST
        $jumdesa = $this->request->getPost('jumdesa');

        $tpstt = $this->request->getPost('tpstt');
        $tpstd = $this->request->getPost('tpstd');
        $tpsttd = $this->request->getPost('tpsttd');
        $fbabjs = $this->request->getPost('fbabjs');
        $fbabju = $this->request->getPost('fbabju');
        $fbabbj = $this->request->getPost('fbabbj');
        $patipal = $this->request->getPost('patipal');
        $patsawah = $this->request->getPost('patsawah');
        $patlt = $this->request->getPost('patlt');
        $patl = $this->request->getPost('patl');
        $splcdl = $this->request->getPost('splcdl');
        $splcrs = $this->request->getPost('splcrs');
        $splcd = $this->request->getPost('splcd');
        $splcsi = $this->request->getPost('splcsi');

        $sauma = $this->request->getPost('sauma');
        $saumdm = $this->request->getPost('saumdm');
        $saumtm = $this->request->getPost('saumtm');
        $saumaiu = $this->request->getPost('saumaiu');
        $saums = $this->request->getPost('saums');
        $saumd = $this->request->getPost('saumd');

        $saucma = $this->request->getPost('saucma');
        $saucdm = $this->request->getPost('saucdm');
        $sauctm = $this->request->getPost('sauctm');
        $saucaiu = $this->request->getPost('saucaiu');
        $saucs = $this->request->getPost('saucs');
        $saucd = $this->request->getPost('saucd');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'jumdesa' =>    $jumdesa,

            'tpstt' =>    $tpstt,
            'tpstd' =>    $tpstd,
            'tpsttd' =>    $tpsttd,
            'fbabjs' =>   $fbabjs,
            'fbabju' =>   $fbabju,
            'fbabbj' =>   $fbabbj,
            'patipal' =>  $patipal,
            'patsawah' => $patsawah,
            'patlt' =>    $patlt,
            'patl' =>     $patl,
            'splcdl' =>   $splcdl,
            'splcrs' =>   $splcrs,
            'splcd' =>    $splcd,
            'splcsi' =>   $splcsi,

            'sauma'  =>    $sauma,
            'saumdm'  =>   $saumdm,
            'saumtm'  =>   $saumtm,
            'saumaiu'  =>  $saumaiu,
            'saums'  =>    $saums,
            'saumd'  =>    $saumd,

            'saucma'  =>   $saucma,
            'saucdm'  =>   $saucdm,
            'sauctm'  =>   $sauctm,
            'saucaiu'  =>  $saucaiu,
            'saucs'  =>    $saucs,
            'saucd'  =>    $saucd

        ];

        /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_product dan membawa parameter data beserta id
    */
        $ubah = $this->HomeModel->update_product($data, $id);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('/admin'));
        }
    }
}

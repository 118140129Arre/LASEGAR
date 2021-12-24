<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\Desa1Model;
use App\Models\Desa2Model;
use App\Models\Desa3Model;
use App\Models\Desa4Model;
use App\Models\Desa5Model;
use App\Models\Desa6Model;
use App\Models\Desa7Model;
use App\Models\Desa8Model;
use App\Models\Desa9Model;
use App\Models\Desa10Model;
use App\Models\Desa11Model;

class Home extends BaseController
{

    protected $HomeModel;
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
        $this->Desa1Model = new Desa1Model();
        $this->Desa2Model = new Desa2Model();
        $this->Desa3Model = new Desa3Model();
        $this->Desa4Model = new Desa4Model();
        $this->Desa5Model = new Desa5Model();
        $this->Desa6Model = new Desa6Model();
        $this->Desa7Model = new Desa7Model();
        $this->Desa8Model = new Desa8Model();
        $this->Desa9Model = new Desa9Model();
        $this->Desa10Model = new Desa10Model();
        $this->Desa11Model = new Desa11Model();
    }

    public function coba()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $Home = $this->HomeModel->search($keyword);
        } else {
            $Home = $this->HomeModel;
        }

        $data = [
            'title' => 'Home',
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
        return view('halaman/coba', $data);
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $Home = $this->HomeModel->search($keyword);
        } else {
            $Home = $this->HomeModel;
        }

        $data = [
            'title' => 'Home',
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
        return view('halaman/home', $data);
    }

    public function table()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $Home = $this->HomeModel->search($keyword);
        } else {
            $Home = $this->HomeModel;
        }

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM umum ORDER BY id ASC";
        $result = $db->query($sql);
        $row = $result->getResult('array');

        $data = [
            'title' => 'Data Lengkap',
            'Home' => $Home->paginate(9, 'Home'),
            'pager' => $this->HomeModel->pager,
            'order' => $row
        ];

        return view('halaman/table', $data);
    }

    public function detail($kecamatan)
    {

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $Home = $this->HomeModel->search($keyword);
        } else {
            $Desa1 = $this->Desa1Model;
            $Desa2 = $this->Desa2Model;
            $Desa3 = $this->Desa3Model;
            $Desa4 = $this->Desa4Model;
            $Desa5 = $this->Desa5Model;
            $Desa6 = $this->Desa6Model;
            $Desa7 = $this->Desa7Model;
            $Desa8 = $this->Desa8Model;
            $Desa9 = $this->Desa9Model;
            $Desa10 = $this->Desa10Model;
            $Desa11 = $this->Desa11Model;
        }

        $data = [
            'title' => 'Detail Kecamatan',
            'Home' => $this->HomeModel->getHome($kecamatan),
            'Desa1' => $Desa1->paginate(1, 'Desa1'),
            'Desa2' => $Desa2->paginate(1, 'Desa2'),
            'Desa3' => $Desa3->paginate(1, 'Desa3'),
            'Desa4' => $Desa4->paginate(1, 'Desa4'),
            'Desa5' => $Desa5->paginate(1, 'Desa5'),
            'Desa6' => $Desa6->paginate(1, 'Desa6'),
            'Desa7' => $Desa7->paginate(1, 'Desa7'),
            'Desa8' => $Desa8->paginate(1, 'Desa8'),
            'Desa9' => $Desa9->paginate(1, 'Desa9'),
            'Desa10' => $Desa10->paginate(1, 'Desa10'),
            'Desa11' => $Desa11->paginate(1, 'Desa11')

        ];
        return view('halaman/detail', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Kami',
        ];
        return view('halaman/about', $data);
    }

    public function edit($id)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data = [
            'title' => 'Daftar Mobil',
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

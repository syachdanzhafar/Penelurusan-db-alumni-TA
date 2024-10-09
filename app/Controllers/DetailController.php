<?php

namespace App\Controllers;

use App\Models\PendidikanLanjutan;
use App\Models\DataLengkap;
use App\Models\Kelas;
use App\Models\WaliKelas;
use CodeIgniter\Controller;

class DetailController extends Controller
{
    protected $pendidikanLanjutanModel;
    protected $dataLengkapModel;
    protected $kelasModel;
    protected $waliKelasModel;

    public function __construct()
    {
        $this->pendidikanLanjutanModel = new PendidikanLanjutan();
        $this->dataLengkapModel = new DataLengkap();
        $this->kelasModel = new Kelas();
        $this->waliKelasModel = new WaliKelas();
    }

    public function create()
    {
        $id_pendidikan_lanjutan = session()->get('id_pendidikan_lanjutan');
        $pendidikanLanjutan = $this->pendidikanLanjutanModel->find($id_pendidikan_lanjutan);
        $kelas = $this->kelasModel->findAll();
        $waliKelas = $this->waliKelasModel->findAll();

        $data = [
            'id' => session()->get('id_alumni'),
            'id_pendidikan_lanjutan' => $id_pendidikan_lanjutan,
            'pendidikan_lanjutan' => $pendidikanLanjutan ? $pendidikanLanjutan['pendidikan_lanjutan'] : '',
            'kelas' => $kelas,
            'waliKelas' => $waliKelas
        ];
        return view('admin/create_detail', $data);
    }

    public function store()
    {
        $data = [
            'id'                     => $this->request->getPost('id'),
            'id_kelas'               => $this->request->getPost('id_kelas'),
            'id_wali_kelas'          => $this->request->getPost('id_wali_kelas'),
            'id_pendidikan_lanjutan' => $this->request->getPost('id_pendidikan_lanjutan'),
            'nama_kelas'             => $this->request->getPost('nama_kelas'),
            'nama_wali_kelas'        => $this->request->getPost('nama_wali_kelas'),
            'pendidikan_lanjutan'    => $this->request->getPost('pendidikan_lanjutan'),
            'agama'                  => $this->request->getPost('agama'),
            'alamat'                 => $this->request->getPost('alamat'),
            'email'                  => $this->request->getPost('email'),
        ];
    
        // Pastikan data tidak null atau kosong
        if (empty($data['id']) || empty($data['id_kelas']) || empty($data['id_wali_kelas']) || empty($data['id_pendidikan_lanjutan']) || empty($data['nama_kelas']) || empty($data['nama_wali_kelas']) || empty($data['pendidikan_lanjutan']) || empty($data['agama']) || empty($data['alamat']) || empty($data['email'])) {
            return redirect()->back()->with('error', 'Semua bidang harus diisi.');
        }
    
        $detailModel = new DataLengkap();
        $detailModel->insert($data);
    
        return redirect()->to('admin/alumni/kelola_data_alumni')->with('success', 'Data berhasil ditambahkan.');
    }
    

    public function edit($id)
    {
        $dataLengkap = $this->dataLengkapModel->find($id);

        if (!$dataLengkap) {
            return redirect()->to('admin/alumni/kelola_data_alumni')->with('error', 'Data tidak ditemukan.');
        }

        $kelas = $this->kelasModel->findAll();
        $waliKelas = $this->waliKelasModel->findAll();

        $data = [
            'dataLengkap' => $dataLengkap,
            'kelas' => $kelas,
            'waliKelas' => $waliKelas
        ];

        return view('admin/edit_detail', $data);
    }

    public function update($id)
    {
        $request = $this->request;

        $data = [
            'id_kelas' => $request->getPost('id_kelas'),
            'id_wali_kelas' => $request->getPost('id_wali_kelas'),
            'pendidikan_lanjutan' => $request->getPost('pendidikan_lanjutan'),
            'agama' => $request->getPost('agama'),
            'alamat' => $request->getPost('alamat'),
            'email' => $request->getPost('email'),
        ];

        $this->dataLengkapModel->update($id, $data);

        return redirect()->to('admin/alumni/kelola_data_alumni')->with('success', 'Data berhasil diperbarui.');
    }

}

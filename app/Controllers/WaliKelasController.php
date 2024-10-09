<?php

namespace App\Controllers;

use App\Models\WaliKelas;
use CodeIgniter\Controller;

class WaliKelasController extends Controller
{
    public function kelola_wali_kelas()
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas['wali_kelas'] = $wali_kelasModel->findAll();
        return view('admin/wali_kelas/kelola_wali_kelas', $data_wali_kelas);
    }

    public function create_wali_kelas()
    {
        return view('admin/wali_kelas/create_wali_kelas');
    }

    public function store_wali_kelas()
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas = [
            'id_wali_kelas'          => $this->request->getPost('id_wali_kelas'),
            'nama_wali_kelas'        => $this->request->getPost('nama_wali_kelas'),
        ];

        $wali_kelasModel->insert($data_wali_kelas);
        return redirect()->to('/admin/wali_kelas/kelola_wali_kelas');
    }

    public function edit_wali_kelas($id_wali_kelas)
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas['wali_kelas'] = $wali_kelasModel->find($id_wali_kelas);
        return view('admin/wali_kelas/edit_wali_kelas', $data_wali_kelas);
    }

    public function update_wali_kelas($id_wali_kelas)
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas = [
            'id_wali_kelas'          => $this->request->getPost('id_wali_kelas'),
            'nama_wali_kelas'        => $this->request->getPost('nama_wali_kelas'),
        ];

        $wali_kelasModel->update($id_wali_kelas, $data_wali_kelas);
        return redirect()->to('/admin/wali_kelas/kelola_wali_kelas');
    }

    public function delete_wali_kelas($id_wali_kelas)
    {
        $wali_kelasModel = new WaliKelas();
        $wali_kelasModel->delete($id_wali_kelas);
        return redirect()->to('/admin/wali_kelas/kelola_wali_kelas');
    }
}

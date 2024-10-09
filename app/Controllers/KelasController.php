<?php

namespace App\Controllers;

use App\Models\Kelas;
use CodeIgniter\Controller;

class KelasController extends Controller
{
    // Start Kelola Kelas
    public function kelola_kelas()
    {
        $kelasModel = new Kelas();
        $data_kelas['kelas'] = $kelasModel->findAll();
        return view('admin/kelas/kelola_kelas', $data_kelas);
    }

    public function create_kelas()
    {
        return view('admin/kelas/create_kelas');
    }

    public function store_kelas()
    {
        $kelasModel = new Kelas();
        $data_kelas = [
            'id_kelas'          => $this->request->getPost('id_kelas'),
            'nama_kelas'        => $this->request->getPost('nama_kelas'),
            'nama_wali_kelas'   => $this->request->getPost('nama_wali_kelas')
        ];

        $kelasModel->insert($data_kelas);
        return redirect()->to('/admin/kelas/kelola_kelas');
    }

    public function edit_kelas($id_kelas)
    {
        $kelasModel = new Kelas();
        $data_kelas['kelas'] = $kelasModel->find($id_kelas);
        return view('admin/kelas/edit_kelas', $data_kelas);
    }

    public function update_kelas($id_kelas)
    {
        $kelasModel = new Kelas();
        $data_kelas = [
            'id_kelas'          => $this->request->getPost('id_kelas'),
            'nama_kelas'        => $this->request->getPost('nama_kelas'),
            'nama_wali_kelas'   => $this->request->getPost('nama_wali_kelas')
        ];

        $kelasModel->update($id_kelas, $data_kelas);
        return redirect()->to('/admin/kelas/kelola_kelas');
    }

    public function delete_kelas($id_kelas)
    {
        $kelasModel = new Kelas();
        $kelasModel->delete($id_kelas);
        return redirect()->to('/admin/kelas/kelola_kelas');
    }
}

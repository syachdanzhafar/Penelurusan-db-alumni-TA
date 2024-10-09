<?php

namespace App\Controllers;

use App\Models\PendidikanLanjutan;
use CodeIgniter\Controller;

class PendidikanLanjutanController extends Controller
{
    protected $pendidikanLanjutanModel;

    public function __construct()
    {
        $this->pendidikanLanjutanModel = new PendidikanLanjutan();
    }

    public function kelola_pendidikan_lanjutan()
    {
        $pendidikanLanjutanModel = new PendidikanLanjutan();
        $data_pendidikan_lanjutan['pendidikan_lanjutan'] = $pendidikanLanjutanModel->findAll();
        return view('admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan', $data_pendidikan_lanjutan);
    }

    public function create()
    {
        return view('admin/pendidikan_lanjutan/create_pendidikan_lanjutan');
    }

    public function store()
    {
        $pendidikanLanjutanModel = new PendidikanLanjutan();
        $data = [
            'pendidikan_lanjutan' => $this->request->getPost('pendidikan_lanjutan'),
            'alamat_sekolah' => $this->request->getPost('alamat_sekolah'),
        ];
        $pendidikanLanjutanModel->insert($data);

        session()->set('id_pendidikan_lanjutan', $pendidikanLanjutanModel->insertID());

        return redirect()->to('/detail/create');
    }


    public function edit_pendidikan_lanjutan($id)
    {
        $data = [
            'pendidikan_lanjutan' => $this->pendidikanLanjutanModel->find($id)
        ];

        return view('admin/pendidikan_lanjutan/edit_pendidikan_lanjutan', $data);
    }

    public function update_pendidikan_lanjutan($id)
    {
        $this->pendidikanLanjutanModel->update($id, [
            'pendidikan_lanjutan' => $this->request->getPost('pendidikan_lanjutan'),
            'alamat_sekolah' => $this->request->getPost('alamat_sekolah'),
        ]);

        return redirect()->to('admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan');
    }

    public function delete_pendidikan_lanjutan($id)
    {
        $this->pendidikanLanjutanModel->delete($id);
        return redirect()->to('admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan');
    }
}

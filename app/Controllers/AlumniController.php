<?php

namespace App\Controllers;

use App\Models\Alumni;
use App\Models\DataLengkap;
use CodeIgniter\Controller;

class AlumniController extends Controller
{
    public function hal_admin()
    {
        return view('admin/hal_admin');
    }

    public function kelola_data_alumni()
    {
        $alumniModel = new Alumni();
        $alumni = $alumniModel->findAll();

        return view('admin/alumni/kelola_data_alumni', ['alumni' => $alumni]);
    }

    public function create()
    {
        return view('admin/alumni/create_data_alumni');
    }

    public function store()
    {
        $alumniModel = new Alumni();
        $data = [
            'nama'          => $this->request->getPost('nama'),
            'nisn'          => $this->request->getPost('nisn'),
            'tgl_lahir'     => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tahun_masuk'   => $this->request->getPost('tahun_masuk'),
            'tahun_lulus'   => $this->request->getPost('tahun_lulus'),
        ];
        $alumniModel->insert($data);

        session()->set('id_alumni', $alumniModel->insertID());

        return redirect()->to('/pendidikan_lanjutan/create');
    }


    public function edit($id)
    {
        $alumniModel = new Alumni();
        $data['alumni'] = $alumniModel->find($id);
        return view('admin/alumni/edit', $data);
    }

    public function update($id)
    {
        $alumniModel = new Alumni();
        $data = [
            'id'            => $this->request->getPost('id'),
            'nama'          => $this->request->getPost('nama'),
            'nisn'          => $this->request->getPost('nisn'),
            'tgl_lahir'     => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tahun_masuk'   => $this->request->getPost('tahun_masuk'),
            'tahun_lulus'   => $this->request->getPost('tahun_lulus'),
        ];

        $alumniModel->update($id, $data);
        return redirect()->to('/admin/alumni/kelola_data_alumni');
    }

    public function delete($id)
    {
        $alumniModel = new Alumni();
        $alumniModel->delete($id);
        return redirect()->to('/admin/alumni/kelola_data_alumni');
    }

    public function detail($id)
    {
        $alumniModel = new Alumni();
        $dataLengkapModel = new DataLengkap();

        $alumni = $alumniModel->find($id);
        $dataLengkap = $dataLengkapModel->where('id', $id)->first();

        return view('admin/detail', [
            'alumni'      => $alumni,
            'dataLengkap' => $dataLengkap,
        ]);
    }
}

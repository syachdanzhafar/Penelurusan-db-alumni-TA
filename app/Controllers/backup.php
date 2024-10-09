<?php

namespace App\Controllers;

use App\Models\Alumni;
use App\Models\DataLengkap;
use App\Models\Agenda;
use App\Models\Laporan;
use App\Models\Kelas;
use App\Models\WaliKelas;
use App\Models\PendidikanLanjutan;

use CodeIgniter\Controller;

class AlumniController extends Controller
{
    public function hal_admin()
    {
        return view('admin/hal_admin');
    }

    // Start Kelola Data Alumni
    protected $alumniModel;
    protected $dataLengkapModel;

    public function __construct()
    {
        $this->alumniModel = new Alumni();
        $this->dataLengkapModel = new DataLengkap();
    }

    public function kelola_data_alumni()
    {
        $alumniModel = new Alumni();
        $alumni = $alumniModel->findAll();

        return view('admin/kelola_data_alumni', ['alumni' => $alumni]);
    }

    public function create()
    {
        $kelasModel = new Kelas();
        $waliKelasModel = new WaliKelas();

        $data['kelas'] = $kelasModel->findAll();
        $data['wali_kelas'] = $waliKelasModel->findAll();

        return view('admin/create', $data);
    }

    public function store()
    {
        $alumniModel = new Alumni();
        $dataLengkapModel = new DataLengkap();

        // Simpan data alumni
        $alumniData = [
            'nama' => $this->request->getPost('nama'),
            'nisn' => $this->request->getPost('nisn'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tahun_masuk' => $this->request->getPost('tahun_masuk'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus')
        ];

        if ($alumniModel->insert($alumniData)) {
            // Simpan data lengkap
            $dataLengkapData = [
                'agama' => $this->request->getPost('agama'),
                'alamat' => $this->request->getPost('alamat'),
                'email' => $this->request->getPost('email'),
                'id_kelas' => $this->request->getPost('id_kelas'),
                'id_wali_kelas' => $this->request->getPost('id_wali_kelas'),
                'pendidikan_lanjutan' => $this->request->getPost('pendidikan_lanjutan')
            ];

            $dataLengkapModel->insert($dataLengkapData);
            return redirect()->to('/alumni');
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function detail($id)
    {
        $alumniModel = new Alumni();
        $dataLengkapModel = new DataLengkap();

        $alumni = $alumniModel->find($id);
        $dataLengkap = $dataLengkapModel->where('id', $id)->first();

        return view('admin/detail', [
            'alumni' => $alumni,
            'dataLengkap' => $dataLengkap,
        ]);
    }

    public function edit($id)
    {
        $alumniModel = new Alumni();
        $data['alumni'] = $alumniModel->find($id);
        return view('admin/edit', $data);
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
        return redirect()->to('/admin/kelola_data_alumni');
    }

    public function delete($id)
    {
        // $alumniModel = new Alumni();
        // $dataLengkapModel = new DataLengkap();
        
        // return redirect()->to('/admin/kelola_agenda');
            $this->alumniModel->delete($id);
            $this->dataLengkapModel->delete($id);
            return redirect()->to('admin/kelola_data_alumni');
    }
    // End Kelola Data Alumni


    // DETAIL
    // DETAIL


    // Start Kelola Laporan
    public function kelola_laporan()
    {
        $laporanModel = new Laporan();
        $data_laporan['laporan'] = $laporanModel->findAll();
        return view('admin/kelola_laporan', $data_laporan);
    }

    public function create_laporan()
    {
        return view('admin/create_laporan');
    }

    public function store_laporan()
    {
        $laporanModel = new Laporan();
        $data_laporan = [
            'id_laporan'       => $this->request->getPost('id_laporan'),
            'tahun_kelulusan'  => $this->request->getPost('tahun_kelulusan'),
            'jumlah_alumni'    => $this->request->getPost('jumlah_alumni'),
        ];

        $laporanModel->insert($data_laporan);
        return redirect()->to('/admin/kelola_laporan');
    }

    public function edit_laporan($id_laporan)
    {
        $laporanModel = new Laporan();
        $data_laporan['laporan'] = $laporanModel->find($id_laporan);
        return view('admin/edit_laporan', $data_laporan);
    }

    public function update_laporan($id_laporan)
    {
        $laporanModel = new Laporan();
        $data_laporan = [
            'id_laporan'       => $this->request->getPost('id_laporan'),
            'tahun_kelulusan'  => $this->request->getPost('tahun_kelulusan'),
            'jumlah_alumni'    => $this->request->getPost('jumlah_alumni'),
        ];

        $laporanModel->update($id_laporan, $data_laporan);
        return redirect()->to('/admin/kelola_laporan');
    }

    public function delete_laporan($id_laporan)
    {
        $laporanModel = new Laporan();
        $laporanModel->delete($id_laporan);
        return redirect()->to('/admin/kelola_laporan');
    }
    // End Kelola Laporan

    // Start Kelola Agenda
    public function kelola_agenda()
    {
        $agendaModel = new Agenda();
        $data_agenda['agenda'] = $agendaModel->findAll();
        return view('admin/kelola_agenda', $data_agenda);
    }

    public function create_agenda()
    {
        return view('admin/create_agenda');
    }

    public function store_agenda()
    {
        $agendaModel = new Agenda();
        $data_agenda = [
            'id_agenda'          => $this->request->getPost('id_agenda'),
            'agenda'             => $this->request->getPost('agenda'),
            'tanggal_kegiatan'   => $this->request->getPost('tanggal_kegiatan')
        ];

        $agendaModel->insert($data_agenda);
        return redirect()->to('/admin/kelola_agenda');
    }

    public function edit_agenda($id_agenda)
    {
        $agendaModel = new Agenda();
        $data_agenda['agenda'] = $agendaModel->find($id_agenda);
        return view('admin/edit_agenda', $data_agenda);
    }

    public function update_agenda($id_agenda)
    {
        $agendaModel = new Agenda();
        $data_agenda = [
            'id_agenda'          => $this->request->getPost('id_agenda'),
            'agenda'             => $this->request->getPost('agenda'),
            'tanggal_kegiatan'   => $this->request->getPost('tanggal_kegiatan')
        ];

        $agendaModel->update($id_agenda, $data_agenda);
        return redirect()->to('/admin/kelola_agenda');
    }

    public function delete_agenda($id_agenda)
    {
        $agendaModel = new Agenda();
        $agendaModel->delete($id_agenda);
        return redirect()->to('/admin/kelola_agenda');
    }
    // End Kelola Agenda


    // Start Kelola Kelas
    public function kelola_kelas()
    {
        $kelasModel = new Kelas();
        $data_kelas['kelas'] = $kelasModel->findAll();
        return view('admin/kelola_kelas', $data_kelas);
    }

    public function create_kelas()
    {
        return view('admin/create_kelas');
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
        return redirect()->to('/admin/kelola_kelas');
    }

    public function edit_kelas($id_kelas)
    {
        $kelasModel = new Kelas();
        $data_kelas['kelas'] = $kelasModel->find($id_kelas);
        return view('admin/edit_kelas', $data_kelas);
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
        return redirect()->to('/admin/kelola_kelas');
    }

    public function delete_kelas($id_kelas)
    {
        $kelasModel = new Kelas();
        $kelasModel->delete($id_kelas);
        return redirect()->to('/admin/kelola_kelas');
    }
    // End Kelola Kelas


    // Start Kelola Wali Kelas
    public function kelola_wali_kelas()
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas['wali_kelas'] = $wali_kelasModel->findAll();
        return view('admin/kelola_wali_kelas', $data_wali_kelas);
    }

    public function create_wali_kelas()
    {
        return view('admin/create_wali_kelas');
    }

    public function store_wali_kelas()
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas = [
            'id_wali_kelas'          => $this->request->getPost('id_wali_kelas'),
            'nama_wali_kelas'        => $this->request->getPost('nama_wali_kelas'),
        ];

        $wali_kelasModel->insert($data_wali_kelas);
        return redirect()->to('/admin/kelola_wali_kelas');
    }

    public function edit_wali_kelas($id_wali_kelas)
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas['wali_kelas'] = $wali_kelasModel->find($id_wali_kelas);
        return view('admin/edit_wali_kelas', $data_wali_kelas);
    }

    public function update_wali_kelas($id_wali_kelas)
    {
        $wali_kelasModel = new WaliKelas();
        $data_wali_kelas = [
            'id_wali_kelas'          => $this->request->getPost('id_wali_kelas'),
            'nama_wali_kelas'        => $this->request->getPost('nama_wali_kelas'),
        ];

        $wali_kelasModel->update($id_wali_kelas, $data_wali_kelas);
        return redirect()->to('/admin/kelola_wali_kelas');
    }

    public function delete_wali_kelas($id_wali_kelas)
    {
        $wali_kelasModel = new WaliKelas();
        $wali_kelasModel->delete($id_wali_kelas);
        return redirect()->to('/admin/kelola_wali_kelas');
    }
    // End Kelola Wali Kelas


    // Start Kelola Pendidikan Lanjutan
    public function kelola_pendidikan_lanjutan()
    {
        $pendidikan_lanjutanModel = new PendidikanLanjutan();
        $data_pendidikan_lanjutan['pendidikan_lanjutan'] = $pendidikan_lanjutanModel->findAll();
        return view('admin/kelola_pendidikan_lanjutan', $data_pendidikan_lanjutan);
    }
    public function create_pendidikan_lanjutan()
    {
        return view('admin/create_pendidikan_lanjutan');
    }

    public function store_pendidikan_lanjutan()
    {
        $pendidikan_lanjutanModel = new PendidikanLanjutan();
        $data_pendidikan_lanjutan = [
            'id_pendidikan_lanjutan'          => $this->request->getPost('id_pendidikan_lanjutan'),
            'nama_pendidikan_lanjutan'        => $this->request->getPost('nama_pendidikan_lanjutan'),
        ];

        $pendidikan_lanjutanModel->insert($data_pendidikan_lanjutan);
        return redirect()->to('/admin/kelola_pendidikan_lanjutan');
    }

    public function edit_pendidikan_lanjutan($id_pendidikan_lanjutan)
    {
        $pendidikan_lanjutanModel = new PendidikanLanjutan();
        $data_pendidikan_lanjutan['pendidikan_lanjutan'] = $pendidikan_lanjutanModel->find($id_pendidikan_lanjutan);
        return view('admin/edit_pendidikan_lanjutan', $data_pendidikan_lanjutan);
    }

    public function update_pendidikan_lanjutan($id_pendidikan_lanjutan)
    {
        $pendidikan_lanjutanModel = new PendidikanLanjutan();
        $data_pendidikan_lanjutan = [
            'id_pendidikan_lanjutan'          => $this->request->getPost('id_pendidikan_lanjutan'),
            'nama_pendidikan_lanjutan'        => $this->request->getPost('nama_pendidikan_lanjutan'),
        ];

        $pendidikan_lanjutanModel->update($id_pendidikan_lanjutan, $data_pendidikan_lanjutan);
        return redirect()->to('/admin/kelola_pendidikan_lanjutan');
    }

    public function delete_pendidikan_lanjutan($id_pendidikan_lanjutan)
    {
        $pendidikan_lanjutanModel = new PendidikanLanjutan();
        $pendidikan_lanjutanModel->delete($id_pendidikan_lanjutan);
        return redirect()->to('/admin/kelola_pendidikan_lanjutan');
    }
    // End Kelola Pendidikan Lanjutan
}

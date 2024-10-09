<?php

namespace App\Controllers;

use App\Models\Alumni;
use App\Models\DataLengkap;
use App\Models\PendidikanLanjutan;
use App\Models\Laporan;
use App\Models\Agenda;
use CodeIgniter\Controller;

class User extends Controller
{
    public function hal_user()
    {
        $alumniModel = new Alumni();
        return view('user/hal_user');
    }


    public function menu_alumni()
    {
        $alumniModel = new Alumni();
        $data['alumni'] = $alumniModel->findAll();
        return view('user/menu_alumni', $data);
    }

    public function detail($id)
    {
        $alumniModel = new Alumni();
        $dataLengkapModel = new DataLengkap();

        $alumni = $alumniModel->find($id);
        $dataLengkap = $dataLengkapModel->where('id', $id)->first();

        return view('user/menu_detail', [
            'alumni'      => $alumni,
            'dataLengkap' => $dataLengkap,
        ]);
    }

    public function menu_pendidikan_lanjutan()
    {
        $pendidikanModel = new PendidikanLanjutan();
        $data['pendidikan'] = $pendidikanModel->findAll();
        return view('user/menu_pendidikan_lanjutan', $data);
    }

    public function menu_laporan()
    {
        $alumniModel = new Alumni();
        $data['laporan'] = $alumniModel->getLaporan(); 
        return view('user/menu_laporan', $data);
    }

    public function menu_agenda()
    {
        $agendaModel = new Agenda();
        $data['agenda'] = $agendaModel->findAll();
        return view('user/menu_agenda', $data);
    }

    public function menu_update_data()
    {
        return view('user/menu_update_data');
    }
}

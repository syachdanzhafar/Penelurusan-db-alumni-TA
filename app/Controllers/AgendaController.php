<?php

namespace App\Controllers;

use App\Models\Agenda;
use CodeIgniter\Controller;

class AgendaController extends Controller
{
    public function kelola_agenda()
    {
        $agendaModel = new Agenda();
        $data_agenda['agenda'] = $agendaModel->findAll();
        return view('admin/agenda/kelola_agenda', $data_agenda);
    }

    public function create_agenda()
    {
        return view('admin/agenda/create_agenda');
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
        return redirect()->to('/admin/agenda/kelola_agenda');
    }

    public function edit_agenda($id_agenda)
    {
        $agendaModel = new Agenda();
        $data_agenda['agenda'] = $agendaModel->find($id_agenda);
        return view('admin/agenda/edit_agenda', $data_agenda);
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
        return redirect()->to('/admin/agenda/kelola_agenda');
    }

    public function delete_agenda($id_agenda)
    {
        $agendaModel = new Agenda();
        $agendaModel->delete($id_agenda);
        return redirect()->to('/admin/agenda/kelola_agenda');
    }
}

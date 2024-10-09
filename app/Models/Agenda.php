<?php

namespace App\Models;

use CodeIgniter\Model;

class Agenda extends Model
{
    protected $table      = 'agenda';
    protected $primaryKey = 'id_agenda';
    protected $allowedFields =
    [
        'id_agenda',
        'agenda',
        'tanggal_kegiatan',
    ];
}

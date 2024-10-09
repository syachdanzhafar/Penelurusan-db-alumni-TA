<?php

namespace App\Models;

use CodeIgniter\Model;

class Laporan extends Model
{
    protected $table      = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $allowedFields =
    [
        'id_laporan',
        'tahun_kelulusan',
        'jumlah_alumni',
    ];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class WaliKelas extends Model
{
    protected $table      = 'wali_kelas';
    protected $primaryKey = 'id_wali_kelas';
    protected $allowedFields =
    [
        'id_wali_kelas',
        'nama_wali_kelas',
    ];
}

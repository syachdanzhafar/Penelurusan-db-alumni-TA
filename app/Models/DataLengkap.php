<?php

namespace App\Models;

use CodeIgniter\Model;

class DataLengkap extends Model
{
    protected $table = 'data_lengkap';
    protected $primaryKey = 'id_data_lengkap';
    protected $allowedFields = [
        'id_data_lengkap',
        'id',
        'id_kelas',
        'id_wali_kelas',
        'id_pendidikan_lanjutan',
        'nama_kelas',
        'nama_wali_kelas',
        'pendidikan_lanjutan',
        'agama',
        'alamat',
        'email'
    ];
}

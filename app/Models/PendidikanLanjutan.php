<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanLanjutan extends Model
{
    protected $table      = 'pendidikan_lanjutan';
    protected $primaryKey = 'id_pendidikan_lanjutan';
    protected $allowedFields =
    [
        'id_pendidikan_lanjutan',
        'pendidikan_lanjutan',
        'alamat_sekolah',
    ];
}

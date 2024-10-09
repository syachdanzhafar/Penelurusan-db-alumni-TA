<?php

namespace App\Models;

use CodeIgniter\Model;

class Alumni extends Model
{
    protected $table      = 'alumni';
    protected $primaryKey = 'id';
    protected $allowedFields =
    [
        'id',
        'nama',
        'nisn',
        'tgl_lahir',
        'jenis_kelamin',
        'tahun_masuk',
        'tahun_lulus'
    ];

    public function getLaporan()
    {
        return $this->select('tahun_lulus, COUNT(*) as jumlah_alumni')
            ->groupBy('tahun_lulus')
            ->findAll();
    }
}

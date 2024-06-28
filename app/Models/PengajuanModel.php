<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_user', 
        'nama_lengkap', 
        'nim', 
        'program_studi', 
        'pertanyaan', 
        'berkas_pendukung',
        'created_at', 
        'updated_at'
    ];
    protected $useTimestamps = true;
}

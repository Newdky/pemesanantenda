<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table      = 'tb_lokasi';
    protected $primaryKey = 'id_lokasi';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_lokasi', 'alamat_lokasi',];

}
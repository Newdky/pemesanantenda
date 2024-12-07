<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table      = 'tb_pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['tanggal_sewa', 'tanggal_kembali', 'status'];

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaanModel extends Model
{
    protected $table      = 'tb_penyewaan';
    protected $primaryKey = 'id_penyewaan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['tanggal_pengambilan', 'tanggal_pengembalian','id_pemesanan','id_lokasi'];

}
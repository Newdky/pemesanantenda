<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table      = 'tb_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['jumlah', 'tanggal_bayar','','metode_pembayaran', 'id_pembayaran'];

}
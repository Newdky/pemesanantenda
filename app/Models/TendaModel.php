<?php

namespace App\Models;

use CodeIgniter\Model;

class TendaModel extends Model
{
    protected $table      = 'tb_tenda';
    protected $primaryKey = 'id_tenda';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_tenda', 'kapasitas','harga_sewa',];

}
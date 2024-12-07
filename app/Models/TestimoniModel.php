<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table      = 'tb_testimoni';
    protected $primaryKey = 'id_testimoni';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['rating', 'komentar','id_pemesanan',];

}
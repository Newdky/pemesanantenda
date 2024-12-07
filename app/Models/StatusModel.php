<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table      = 'tb_status';
    protected $primaryKey = 'id_status';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['tenda', 'kursi','meja'];

}
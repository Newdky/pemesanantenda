<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'User';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'id';
    protected $allowedFields = ['Username', 'Password',];

}


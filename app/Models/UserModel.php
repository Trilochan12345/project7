<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'register';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'email', 'password'];
    protected $returnType    = 'array';

    public function getUserByEmailOrUsername($identity)
    {
        return $this->where('email', $identity)
                    ->orWhere('username', $identity)
                    ->first();
    }
}

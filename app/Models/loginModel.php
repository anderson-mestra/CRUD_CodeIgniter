<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    public function obtenerUsuario($data)
    {
        $usuario = $this->db->table('login');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}

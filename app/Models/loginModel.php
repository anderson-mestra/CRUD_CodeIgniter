<?php

namespace App\Models;

use App\Database\Seeds\Usuario;
use CodeIgniter\Model;

class LoginModel extends Model
{

    public function obtenerUsuario($data)
    {
        $usuario = $this->db->table('login');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }

    public function registrar($datos) {
        $usuario = $this->db->table('login');
        
        return $usuario->insert($datos);
    }

    public function verificarUserRep($usuario) {
        $usuario = $this->db->table('login');

        return $usuario->where('usuario', $usuario);
    }
}

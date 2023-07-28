<?php

namespace App\Models;

use CodeIgniter\Model;

class CRUDModel extends Model
{

    public function estudiantes()
    {
        $estudiantedb = $this->db->query('select * from estudiante');
        return $estudiantedb->getResult(); //GetResult devuelve los valores con objetos
    }
    
    public function insertar($datos){

        $estudiantedb = $this->db->table('estudiante');
        $estudiantedb->insert($datos);

        return $this->db->insertID();        
    }

    public function obtenerID($data) {
        $estudiantedb = $this->db->table('estudiante');
        $estudiantedb->where($data);
        return $estudiantedb->get()->getResultArray();
    }
}
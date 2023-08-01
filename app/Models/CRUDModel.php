<?php

namespace App\Models;

use CodeIgniter\Model;

class CRUDModel extends Model
{

    public function estudiantes()
    {
        $estudiantedb = $this->db->query('select * from estudiante');
        return $estudiantedb->getResult(); //GetResult devuelve los valores en un objetos
    }

    public function insertar($datos)
    {

        $estudiantedb = $this->db->table('estudiante');
        $estudiantedb->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerID($id)
    {
        $estudiantedb = $this->db->table('estudiante');
        $estudiantedb->where($id);
        return $estudiantedb->get()->getResultArray();
    }

    public function actualizar($id, $datos)
    {

        $estudiantedb = $this->db->table('estudiante');
        $estudiantedb->set($datos);
        $estudiantedb->where('idEstudiante', $id);

        return $estudiantedb->update();
    }

    public function borrar($id){
        $estudiantedb = $this->db->table('estudiante');
        $estudiantedb->where('idEstudiante', $id);

        return $estudiantedb->delete();
    }
}

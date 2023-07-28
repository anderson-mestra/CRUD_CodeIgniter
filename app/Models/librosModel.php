<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{

    public function mostrarlibros()
    {

        $libros = $this->db->query('select * from libro');
        return $libros->getResult();
    }
}

<?php

namespace App\Controllers;

use App\Models\CRUDModel;

class CRUDController extends BaseController
{
    public function index()
    {
        //Instancio el modelo y el metodo estudiantes que trae los registros de la tabla estudiante
        $crud = new CRUDModel();
        $dato = $crud -> estudiantes();

        $mensaje = session('mensaje');

        $data = [
            'datos' => $dato,
            'mensaje' => $mensaje
        ];

        return view('crud/index', $data);
    }

    public function crear(){
        //datos del formulario
        $datos = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'cedula' => $_POST['cedula'],
            'correo' => $_POST['correo']
        ];

        //Instancio el modelo y el metodo insertar para la insercion de datos
        $crud = new CRUDModel();
        $respuesta = $crud->insertar($datos);

        //Se realiza una redirección a la página principal del sitio y envía un mensaje flash de sesión con un valor numérico
        
        if ($respuesta > 0) {
            return redirect()->to(base_url().'/CRUD')->with('mensaje','1');
        } else {
            return redirect()->to(base_url().'/CRUD')->with('mensaje','0');
        }
        
    }

    public function obtenerID($idEstudiante) {
        $data = ['idEstudiante' => $idEstudiante];
        $crud = new CRUDModel();
        $respuesta = $crud->obtenerID($data);
        
        $datos = ['datos' => $respuesta];
        return view('crud/actualizar', $datos);
    }

    public function actualizar(){

    }

    public function eliminar() {
        echo 'Eliminado!';
    }
}
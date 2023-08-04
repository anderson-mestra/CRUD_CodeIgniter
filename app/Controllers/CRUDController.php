<?php

namespace App\Controllers;

use App\Models\CRUDModel;

class CRUDController extends BaseController
{
    public function index()
    {
        //Instancio el modelo y el metodo estudiantes que trae los registros de la tabla estudiante
        $crud = new CRUDModel();
        $dato = $crud->estudiantes();

        $mensaje = session('mensaje');
        
        //Cambio el formato de la fecha a los registros de la db
        foreach ($dato as $key) {
            $fechadb = strtotime($key->fechaIngreso);
            $fecha = date('m-d-Y', $fechadb);
            $key->fechaIngreso = $fecha;
        }

        $data = [
            'datos' => $dato,
            'mensaje' => $mensaje
        ];

        echo view('templates/header');
        echo view('crud/index', $data);
        echo view('templates/footer');
    }

    public function crear()
    {
        //datos del formulario
        $datos = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'cedula' => $_POST['cedula'],
            'correo' => $_POST['correo']
        ];

        if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['cedula']) && !empty($_POST['correo'])) {
            //Instancio el modelo y el metodo insertar para la insercion de datos
            $crud = new CRUDModel();

            $validarCed = $crud->validarCedula($_POST['cedula']);

            //Valida si hay algun valor en la busqueda de la cedula que se ha ingresado en el formulario
            if (!empty($validarCed)) {
                $return = redirect()->to(base_url() . '/CRUD')->with('mensaje', 'cedRep');
            }
             else {
                //Se realiza una redirección a la página principal del sitio y envía un mensaje flash de sesión con un valor numérico
                $respuesta = $crud->insertar($datos);

                //Si en la respuesta devuelve algun indice se muestra si se hizo la insercion
                if ($respuesta > 0) {
                    $return = redirect()->to(base_url() . '/CRUD')->with('mensaje', '1');
                } else {
                    $return = redirect()->to(base_url() . '/CRUD')->with('mensaje', '0');
                }
            }
        } else {
            $return = redirect()->to(base_url() . '/CRUD')->with('mensaje', 'vacio');
        }

        return $return;
    }

    public function obtenerID($idEstudiante)
    {
        $data = ['idEstudiante' => $idEstudiante];
        $crud = new CRUDModel();
        $respuesta = $crud->obtenerID($data);

        $datos = ['datos' => $respuesta];
        return view('crud/actualizar', $datos);
    }

    public function actualizar()
    {
        $datos = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'cedula' => $_POST['cedula'],
            'correo' => $_POST['correo']
        ];

        $idEstudiante = $_POST['id'];

        $crud = new CRUDModel();

        $respuesta = $crud->actualizar($idEstudiante, $datos);

        if ($respuesta) {
            return redirect()->to(base_url() . '/CRUD')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/CRUD')->with('mensaje', '3');
        }
    }

    public function eliminar($idEstudiante)
    {

        $data = ['idEstudiante' => $idEstudiante];
        $crud = new CRUDModel();

        $respuesta = $crud->borrar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/CRUD')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/CRUD')->with('mensaje', '5');
        }
    }
}

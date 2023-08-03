<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login/login', ['mensaje' => $mensaje]);
    }

    public function prueba()
    {

        $contrasena = $this->request->getPost('contrasena');

        $hash = '$2y$10$a4LXcxZciCDVRA.O/rcdou2';

        if (password_verify($contrasena, $hash)) {
            echo 'son igules';
        }
        else
        {
            echo 'No son iguales';
        }

        

    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        $Usuario = new LoginModel();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        // Si hay registro de usuario redirige a la pagina principal o ingresa
        if (
            count($datosUsuario) > 0 &&
            password_verify($contrasena, $datosUsuario[0]['contrasena'])
        ) {

            // Creo una sesion con los siguiente valores
            $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "tipo" => $datosUsuario[0]['tipo']
            ];

            $sesion = session();
            $sesion->set($data);

            return redirect()->to(base_url('/CRUD'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }
}

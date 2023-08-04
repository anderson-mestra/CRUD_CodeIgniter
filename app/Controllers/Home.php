<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');

        echo view('templates/header');
        echo view('login/login', ['mensaje' => $mensaje]);
        echo view('templates/footer');
    }

    public function registro()
    {
        $mensaje = session('mensaje');

        echo view('templates/header');
        echo view('login/registro', ['mensaje' => $mensaje]);
        echo view('templates/footer');
    }

    public function registrar() {
        $usuarios = new LoginModel();

        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');
        $tipo = $this->request->getPost('btnradio');

        $datos = [
            'usuario' => $usuario,
            'contrasena' => $contrasena,
            'tipo' => $tipo
        ];

        $validacion = $usuarios->verificarUserRep($usuario);

        // if (empty($usuario) || empty($contrasena) || empty($tipo)) {
        //     return redirect()->to(base_url(). '/registro')->with('mensaje','1');
        // }elseif (empty($validacion)) {
        //     $usuarios->registrar($datos);
        //     return redirect()->to(base_url(). '/registro')->with('mensaje','2');
        // }else{
        //     return redirect()->to(base_url(). '/registro')->with('mensaje','3');
        // }
        var_dump($validacion);
    }

    public function prueba()
    {

        $contrasena = $this->request->getPost('contrasena');

        $hash = '$2y$10$a4LXcxZciCDVRA.O/rcdou2';

        if (password_verify($contrasena, $hash)) {
            echo 'son iguales';
        } else {
            echo 'No son iguales';
        }
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');
        // $contrasenamd5 = md5($contrasena);

        $usuarios = new LoginModel();

        $datosUsuario = $usuarios->obtenerUsuario(['usuario' => $usuario]);

        // Si hay registro de usuario redirige a la pagina principal o ingresa
        if (
            count($datosUsuario) > 0 &&
            $contrasena == $datosUsuario[0]['contrasena']
        ) {

            // Creo una sesion y le paso los siguiente valores
            $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "tipo" => $datosUsuario[0]['tipo']
            ];

            $sesion = session();
            $sesion->set($data);

            return redirect()->to(base_url('/CRUD'));
        } else {

            return redirect()->to(base_url('/'))->with('mensaje', '<div class="alert alert-danger">Usuario y/o contrasena incorrecta</div>');
        }
    }

    //Funcion para cerrar la sesion
    public function salir()
    {
        $sesion = session();
        $sesion->destroy();
        return redirect()->to(base_url('/'));
    }
}

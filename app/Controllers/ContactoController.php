<?php

namespace App\Controllers;

use PhpParser\Node\Expr\FuncCall;
use App\Models\LibrosModel;

class ContactoController extends BaseController
{
    public function index()
    {

        //Creo un array asociotivo donde se guardara la info que se le pasara a la vista
        $datos = [
            'email' => 'anderson@gmail.com',
            'contrasena' => 'loquesea'
        ];

        $pagina = view('contacto/header') .
            view('contacto/nav') .
            view('contacto/inicio') .
            view('contacto/card', $datos) .
            view('contacto/footer');


        // Otra forma de mostrar los modulos
        // echo view('contacto/header');
        // echo view('contacto/inicio');

        return $pagina;
    }

    public function otraPagina()
    {

        echo view('contacto/header');
        echo view('contacto/nav');
        echo view('contacto/nuevo');
        echo view('contacto/footer');
    }

    public function metodoPOST()
    {
        $libros = new LibrosModel();
        $datos = $libros->mostrarlibros();
        print_r($datos);
        var_dump($_POST);
    }
}

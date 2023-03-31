<?php

namespace App\Controllers;

class ContactoController extends BaseController
{

    public function index()
    {   
        $vista =  view('contacto/index');

        return $vista;
    }

    public function catalogo($num)
    {
     
        $numCatalogo = [ 'numero' => $num];

        $vista = view('contacto/catalogo', $numCatalogo);

        return $vista;
    }

    public function formulario()
    {

        $vista = view('contacto/formulario');

        return $vista;
    }

    public function enviarPost()
    {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];

        echo $valor1 + $valor2;
    }

}
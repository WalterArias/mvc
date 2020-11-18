<?php
class Prueba extends Controlador
{
    public function __construct()
    {
        $this->pruebamodelo = $this->modelo('pruebamodelo');
    }

    public function index()
    {
        $datos = $this->pruebamodelo->listarpublicaciones();
        $this->vista('pruebas/pruebavista',$datos);
    }
}
    
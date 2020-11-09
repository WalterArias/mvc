<?php

class Articulo extends Controlador
{
    public function __construct()
    {
        $this->articulomodelo = $this->modelo('ArticuloModelo');
    }

    public function index()
    {
        $datos = $this->articulomodelo->obtenerArticulos();
        $this->vista('Articulo/ArticuloVista', $datos);
    }
}

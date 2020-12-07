<?php
class Factura extends Controlador
{
    public function __construct()
    {
        $this->clientemodelo = $this->modelo('ClienteModelo');
    }

    public function index()
    {
        $this->vista('Articulo/factura');
    }
}

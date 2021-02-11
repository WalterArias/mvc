<?php
class ListadoCliente extends Controlador
{
    public function __construct()
    {
        $this->clientemodelo = $this->modelo('ClienteModelo');
    }

    public function index()
    {
        $datos = $this->clientemodelo->obtenerClientes();
        $this->vista('Reportes/ListadoCliente', $datos);
    }
    
}

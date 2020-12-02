<?php
class ClienteTable extends Controlador
{
    public function __construct()
    {
        $this->clientemodelo = $this->modelo('ClienteModelo');
    }

    public function index()
    {
        $datos = $this->clientemodelo->obtenerClientes();
        $this->vista('Cliente/ClienteTable', $datos);
    }
}

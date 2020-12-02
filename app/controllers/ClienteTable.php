<?php
class ClienteTable extends Controlador
{
    public function __construct()
    {
        $this->clientemodelo = $this->modelo('ClienteModelo');
    }

    public function index()
    {
       
        $this->vista('Cliente/ClienteTable');
    }

    public function listarClientes(){
        $datos = $this->clientemodelo->obtenerClientes();
         echo json_encode($datos);
        

    }
}

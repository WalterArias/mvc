<?php
class Pedido extends Controlador
{
    public function __construct()
    {
        $this->pedidomodelo = $this->modelo('PedidoModelo');
    }
    public function index()
    {
        //$datos = $this->clientemodelo->obtenerClientes();  
        $this->vista('Pedido/PedidoVista');
    }
    
}

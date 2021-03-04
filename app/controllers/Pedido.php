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

    public function crearPedido()
    {             
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
        ];
            $datos = $this->pedidomodelo->crearPedido($datos);
            echo json_encode($datos);
        
        }
    }
    
    


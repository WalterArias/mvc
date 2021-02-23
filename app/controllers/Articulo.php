<?php
class Articulo extends Controlador
{
    public function __construct()
    {
        $this->articulomodelo = $this->modelo('ArticuloModelo');
    }

    public function index()
    {       
        $this->vista('Articulo/ArticuloVista');
    }

    public function listarArticulos(){
        $datos = $this->articulomodelo->obtenerArticulos();
         echo json_encode($datos);       

    }
/* 
    public function crearCliente()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
        ];
            $datos = $this->clientemodelo->crearCliente($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
                    
        ];
            $datos = $this->clientemodelo->actualizarCliente($datos);
            echo json_encode($datos);
        }
    }
    public function eliminarCliente()
    {
        $datos =[
            'id_cliente' => $_POST['id']
        ];

        $datos = $this->clientemodelo->eliminarCliente($datos);
        echo json_encode($datos);
    } */


}

<?php

class PedidoModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function crearPedido($datos)
    {
        $this->db->query('INSERT INTO cliente (clientenombre, clienteapellidos, direccion,email,fechaingreso,deuda,estado) VALUES (:nombre,  :apellido, :direccion,
         :email, :fecha, :deuda, :estado);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':apellido', $datos['apellido']);
        $this->db->bind(':direccion', $datos['direccion']);
        $this->db->bind(':email', $datos['email']);
        $this->db->bind(':fecha', $datos['fecha']);
        $this->db->bind(':deuda', $datos['deuda']);
        $this->db->bind(':estado', $datos['estado']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
}

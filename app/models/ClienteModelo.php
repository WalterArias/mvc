<?php

class ClienteModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerClientes(){
        $this->db->query('SELECT * from Cliente');
        $resultados = $this->db->registros();
        return $resultados;
    }  

    public function contarClientes()
    {
        $this->db->query('SELECT count(*) from Cliente');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function mostrarUnCliente()
    {
        $this->db->query('SELECT * from Cliente where idcliente = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }
    
  public function actualizarCliente($datos){
    $this->db->query('UPDATE cliente SET clientenombre = :nombre, clienteapellidos = :apellido,
    direccion = :direccion, email = :email, fechaingreso= :fecha, Deuda = :deuda, estado = :estado 
    WHERE idcliente = :id');
    //Vinculamos los valores
    	$this->db->bind(':id', $datos['id']);
        $this->db->bind(':nombre', $datos['nombre']);
         $this->db->bind(':apellido', $datos['apellido']);
         $this->db->bind(':direccion', $datos['direccion']);
         $this->db->bind(':email', $datos['email']);
         $this->db->bind(':fecha', $datos['fecha']);
         $this->db->bind(':deuda', $datos['deuda']);              
     	$this->db->bind(':estado', $datos['estado']);        
    	// Ejecutar
    	if ($this->db->execute()){
    		return 'Operacion realizada con exito';
    	} else {
    	return 'Ha ocurrido un error en la operacion !';
    	}
  }
  public function crearcliente($datos)
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

 
    public function eliminarCliente($datos)
    {
        $this->db->query('DELETE FROM cliente WHERE idcliente = :id');
        $this->db->bind(':id', $datos['id_cliente']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

  }




    
    // public function agregarUsuario($datos){
    // 	$this->db->query('INSERT INTO usuarios (nombre, email, telefono) VALUES (:nombre, :email, :telefono);');
        
    // 	// Vinculamos los valores
    // 	$this->db->bind(':nombre', $datos['nombre']);
    // 	$this->db->bind(':email', $datos['email']);
    // 	$this->db->bind(':telefono', $datos['telefono']);
        
    // 	// Ejecutar
    // 	if ($this->db->execute()){
    // 		return true;
    // 	} else {
    // 		return false;
    // 	}
    // }

    // public function obtenerUsuarioId($id) {
    // 	$this->db->query('SELECT * FROM usuarios WHERE id_usuario = :id');
    // 	$this->db->bind(':id', $id);
    // 	$resultados = $this->db->registro();
    // 	return $resultados;
    // }

    // public function actualizarUsuario($datos) {
    // 	$this->db->query('UPDATE usuarios SET nombre = :nombre, email = :email, telefono = :telefono WHERE id_usuario = :id');
        
    // 	// Vinculamos los valores
    // 	$this->db->bind(':id', $datos['id_usuario']);
    // 	$this->db->bind(':nombre', $datos['nombre']);
    // 	$this->db->bind(':email', $datos['email']);
    // 	$this->db->bind(':telefono', $datos['telefono']);
        
    // 	// Ejecutar
    // 	if ($this->db->execute()){
    // 		return true;
    // 	} else {
    // 		return false;
    // 	}
    // }

    // public function eliminarUsuario($datos) {
    // 	$this->db->query('DELETE FROM usuarios WHERE id_usuario = :id');
    // 	$this->db->bind(':id', $datos['id_usuario']);

    // 	// Ejecutar
    // 	if ($this->db->execute()){
    // 		return true;
    // 	} else {
    // 		return false;
    // 	}
    // }

    
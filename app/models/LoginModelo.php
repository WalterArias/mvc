<?php
class LoginModelo{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

   public function validarIngreso($datos){  
    $this->db->query('SELECT * FROM usuario where login = :login');
    $this->db->bind(':login', $datos['login']);
    $resultados = $this->db->registros();
    return $resultados;
}  


}
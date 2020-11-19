<?php
class BienesModelo{
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


}
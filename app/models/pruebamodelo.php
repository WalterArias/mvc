<?php
class Pruebamodelo{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function listarpublicaciones()
    {
        $this->db->query('SELECT * from publicacion');
        $resultados = $this->db->registros();
        return $resultados;
    }


}
<?php
/* controlador para bienes*/
class Bienes extends Controlador{

    public function __construct()
    {
        $this->BienesModelo = $this->modelo('BienesModelo');
    }

    public function Index(){
        $datos = $this->BienesModelo->obtenerClientes();  //obtengo la informacion llamando el modelo y su metodo
        $this->vista('Bienes/BienesVista',$datos);  //llamo la vista enviandole la data obtenida en el modelo ver linea anterior

    }
   
}

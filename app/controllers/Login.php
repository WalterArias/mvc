<?php

class Login extends Controlador
{

    public function __construct()
    {
        $this->loginmodelo = $this->modelo('LoginModelo');
    }

    public function index()
    {
        $this->vista('login/loginvista');
    }

    public function validarIngreso()
    {
        $login = $_POST['login'];   
        $password = $_POST['password'];
        $datos = [
        'login' =>$login,
        'password' =>$password
        ];
        $datos = $this->loginmodelo->validarIngreso($datos);    // TRUE O FALSE    
       if ($datos== FALSE){
        echo 'Los datos ingresados no coinciden !';
        

    } else {
        //echo var_dump($datos);
        $this->vista('home/index', $datos);
    }     
}


 public function cerrarSesion(){
    session_start();
    session_unset();
    session_destroy();
    $this->vista('login/loginvista');


 }
}
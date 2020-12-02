<?php
class LoginModelo
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function validarIngreso($datos)
    {
        $this->db->query('SELECT * FROM usuario where usuario_login = :login');
        $this->db->bind(':login', $datos['login']);
        $resultados = $this->db->registros();
        if (count($resultados) == 1) {
            if (password_verify($datos['password'], $resultados['0']->usuario_pass)) {
                session_start();
                $_SESSION['login'] = $resultados['0']->usuario_login;
                $_SESSION['nombre'] = $resultados['0']->usuario_nombre;
                $_SESSION['apellidos'] = $resultados['0']->usuario_apellido;
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

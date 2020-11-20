<?php

	class Login extends Controlador {
		
		public function __construct() {
			
		}

		public function index() {

		/* 	$datos = [
				'titulo' => 'Bienvenidos al Framework MVC en PHP',
			]; */
			$this->vista('login/loginvista');
		}

	}

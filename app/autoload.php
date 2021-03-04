<?php

	// Cargamos las librerias de la carpeta libraries
	error_reporting(E_ALL ^ E_NOTICE);  //poner esto !!
	require_once 'config/configurar.php';

	// Autoload
	spl_autoload_register( function($nombreClase) {
		require_once 'libraries/' . $nombreClase . '.php';
	});
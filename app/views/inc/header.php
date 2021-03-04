<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css ">
    <link rel="stylesheet" href="<?php echo RUTA_URL ?>public/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Tienda Don Pedro</title>
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">

                <p>
                    Don Pedro Supertienda <i class="bi bi-handbag"></i>
                </p>
            </div>
            <ul class="list-unstyled components">

                <!--  <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" aria-controls="homeSubmenu" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="#">Inicio</a>
                </li>

                <li>
                    <a href="<?php echo RUTA_URL . 'Cliente' ?>">Cliente</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_URL . 'Articulo' ?>">Articulo</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_URL . 'Pedido' ?>">Pedido</a>
                </li>
                <li>
                    <a href="#reportes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reportes</a>
                    <ul class="collapse list-unstyled" id="reportes">

                        <li>
                            <a href="<?php echo RUTA_URL . 'ListadoCliente' ?>">Listado de Clientes</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Exportar</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">

                        <li>
                            <a href="<?php echo RUTA_URL . 'Cliente' ?>">Exportar Clientes a Excel</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-sm btn-secondary">
                        <i class="bi bi-arrow-left-short"></i>
                    </button>
                    <!--  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-arrow-left-short"></i>
                    </button> -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <?php
                                error_reporting(E_ERROR);
                                session_start();
                                // echo  $_SESSION['login'];
                                echo   $_SESSION['nombre'] . '  ' . $_SESSION['apellidos'];


                                ?>
                                <!--  <a class="nav-link" href="#"></a> -->
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo RUTA_URL . 'login/cerrarSesion'; ?>">Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
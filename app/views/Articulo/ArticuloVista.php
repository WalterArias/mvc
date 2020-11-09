<?php require RUTA_APP . '/views/inc/header.php' ;?>
    <!-- Inicio del codigo del sitio -->
    <div class ="container-fluid" >

        <div class ="card">
            <div class = "card-header">
                PAGINA DE LOS ARTICULOS
            </div>
            <div class ="card-body">
                Esta vista pertenece al controlador del  ARTICULO  :::::

            </div>
            <h1> este es un cambio en la vista</h1>

            <table>

<th>Id</th>
<th>Descripcion</th>


<?php


foreach ( $datos as $dato ){
    echo '<tr>';
    echo '<td>';
    echo $dato->idarticulo;
    echo '</td>';
    echo '<td>';
    echo $dato->descripcion;
    echo '</td>';

    echo '</tr>';
}

?>

</table>

        </div>

    </div>


    <!-- Fin del codigo del sitio -->
<?php require RUTA_APP . '/views/inc/footer.php' ;?>
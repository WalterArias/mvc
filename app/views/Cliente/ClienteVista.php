<?php require RUTA_APP . '/views/inc/header.php' ;?>
    <!-- Inicio del codigo del sitio -->
    <div class ="container-fluid" >

        <div class ="card">
            <div class = "card-header">
                <H1>DATOS DE LOS CLIENTES</H1>
            </div>
            <div class ="card-body">
                Esta vista pertenece al controlador del  CLIENTE  :::::

            </div>

<table class="table table-striped">  
<thead class="thead-light">
<th>id</th>
<th>Nombre</th>
<th>Edad</th>
        <tr>
        <?php
            foreach ($datos as $dato) {
                echo '<tr>';
                echo '<td>';
                echo $dato->idcliente;
                echo '</td>';
                echo '<td>';
                echo $dato->nombre;
                echo '</td>';
                echo '<td>';
                echo $dato->edad;
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tr>   
        </thead>        
</table>
        </div>

    </div>


    <!-- Fin del codigo del sitio -->
<?php require RUTA_APP . '/views/inc/footer.php' ;?>
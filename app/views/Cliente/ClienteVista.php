<?php
 header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= data.xls");   



?>


<table>
  <th>Nombre</th>

  <th>Apellidos</th>
  <th>Dirección</th>

  <?php foreach ($datos as $valor) : ?>
    <tr>
      <td> <?php echo $valor->clientenombre; ?> </td>
      <td><?php echo $valor->clienteapellidos; ?> </td>
      <td><?php echo $valor->direccion; ?> </td>

    </tr>


  <?php endforeach; ?>

</table>







<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?php echo RUTA_URL; ?>public/js/menu.js"></script>
<?php require RUTA_APP . '/views/inc/footer.php'; ?>
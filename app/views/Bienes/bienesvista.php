<?php require RUTA_APP . '/views/inc/header.php'; ?>

<h1>esta es la vista de BIENES</h1>
<div class="row">
  <div class="col-12">

    <table class="table table-hover table-striped">
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Dirección</th>

      <?php foreach ($datos as $valor) : ?>
        <tr>
          <td> <?php echo $valor->clientenombre; ?> </td>
          <td><?php echo $valor->clienteapellidos; ?> </td>
          <td><?php echo $valor->direccion; ?> </td>
          <td>
            <a href="<?php echo RUTA_URL . 'index'; ?>">

              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg>
              Home



            </a>
          </td>
          <td>



          </td>
        </tr>


      <?php endforeach; ?>

    </table>

  </div>


</div>
<div class="row">

  <div class="col-4"></div>
  <div class="col-4">

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

  </div>
  <div class="col-4"></div>

</div>







<?php require RUTA_APP . '/views/inc/footer.php'; ?>
<?php require RUTA_APP . '/views/inc/header.php'; ?>

<div class="row">

    <div class="col-md-12">
        <div class="card" id="formulario">
            <div class="card-header">
                <b>Pedido</b>
            </div>
            <div class="card-body">
                <form class="formpedido" method="POST">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="form-check-label">
                                <label>Cliente</label>
                                <select class="form-control" id="estado" name="estado">
                                    <option>aaaaaaaaaa</option>
                                    <option>bbbbbbbbbb</option>

                                </select>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label for="nombre">nombre</label>
                            <input id="nombre" class="form-control" type="text" name="nombre">

                        </div>
                        <div class="col-md-3">
                            <label for="direccion">Direccion:</label>
                            <input id="direccion" class="form-control" type="text" name="direccion">
                        </div>
                        <div class="col-md-3">
                            <label for="Fecha">Fecha</label>
                            <input id="fecha" class="form-control" type="date" name="fecha">

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-2">
                            <button class="btn btn-primary" type="button" id="AgregarItem"><i class="icon-add"></i>
                                Agregar Detalle</button>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="button" id="imprimir"><i class="icon-print"></i>
                            Imprimir</button>
                        <button class="btn btn-primary" type="button" id="cancelar"><i class="icon-reply"></i>
                            Cancelar</button>

                        <input id="guardar" class="btn btn-success" type="submit" value="Guardar">
                </form>

            </div>

        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?php echo RUTA_URL; ?>public/js/menu.js"></script>
<script src="<?php echo RUTA_URL; ?>public/js/modulos/pedido.js"></script>

<?php require RUTA_APP . '/views/inc/footer.php'; ?>
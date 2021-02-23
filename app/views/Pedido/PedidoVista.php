<?php require RUTA_APP . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card" id="vistatabla">
            <div class="card-header">
                <b>Pedido</b> <button type="button" id="nuevo" class="btn btn-sm btn-success" data-toggle='tooltip' title=' Agregar un Pedido'> <i class="bi bi-file-plus"></i> </button>
            </div>
        </div> <!-- tabla inicial con los pedidos -->
        <div class="card" id="formulario">
            <div class="card-body">
                <form class="formpedido" method="POST">
                    <div class="row">
                        <div class="col-sm-5"><label for="Consecutivo">Pedido No.: XYZ</label></div>
                        <div class="col-sm-2><label for=" Fecha">Fecha</label></div>
                        <div class="col-sm-3"> <input id="fecha" class="form-control form-control-sm" type="date" name="fecha" placeholder="Fecha Pedido">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm2">
                            <div class="input-group">
                                <input type="text" class="form-control  form-control-sm" placeholder="Cliente">
                                <!--     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button> -->
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#frmClientes">
                                        <i class="bi bi-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4"> <input id="nombre" class="form-control form-control-sm" type="text" name="nombre" placeholder="nombre">
                        </div>
                        <div class="col-sm-4"><input id="direccion" class="form-control form-control-sm" type="text" name="direccion" placeholder="direccion">
                        </div>
                    </div>
                    <hr class="estilo1">
                    <div class="row">
                        <div class="col-md-10">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#frmArticulos"> + Articulo
                                <i class="bi bi-table"></i></button>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>idArticulo</th>
                                        <th>Descripcion</th>
                                        <th>Cantidad</th>
                                        <th>Vr. Unitario</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>Total</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!--  botonera -->
                        <button class="btn btn-sm btn-secondary" type="button" id="imprimir">
                            <i class="bi bi-printer"></i></button>
                        <button class="btn btn-sm btn-secondary" type="button" id="cancelar">
                            <i class="bi bi-x-square"></i></button>
                        <input id="guardar" class="btn btn-sm btn-success" type="submit" value="Guardar">
                </form>
            </div> <!-- fin del card -->
        </div>
    </div>
</div>
<!--modales -->
<!-- Modal -->
<div class="modal fade" id="frmClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="tablaClientes" class="table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th> id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Agregar</th>

                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="frmArticulos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Articulos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="tablaArticulos" class="table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Descripcion </th>
                            <th>Precio</th>
                            <th>Agregar</th>

                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?php echo RUTA_URL; ?>public/js/menu.js"></script>
<script src="<?php echo RUTA_URL; ?>public/js/modulos/pedido.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>
<?php require RUTA_APP . '/views/inc/footer.php'; ?>
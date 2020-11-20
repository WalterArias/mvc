<?php require RUTA_APP . '/views/inc/headerLogin.php'; ?>


<div class="row">
    <div class="col-md-6">
        <div class="card" >
            <img src="<?php echo RUTA_URL . 'public/img/tienda.jpg'; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tienda Don Pedro</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
            </div>
        </div>


    </div>
    <div class="col-md-6">
        <form method="POST" action="<?php echo RUTA_URL.'login/validarIngreso' ;?>">
            <div class="form-group">
                <label for="login">Usuario</label>
                <input type="text" class="form-control" id="login" aria-describedby="login" name="login" placeholder="Ingrese el usuario registrado en el sistema">
                <!--  <small id="login" class="form-text text-muted">Ingrese el usuario registrado en el sistema</small> -->
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php require RUTA_APP . '/views/inc/footerLogin.php'; ?>
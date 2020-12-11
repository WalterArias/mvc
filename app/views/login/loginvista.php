<?php require RUTA_APP . '/views/inc/headerLogin.php'; ?>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <img src="<?php echo RUTA_URL . 'public/img/tienda.jpg'; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tienda Don Pedro</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
        </div>


    </div>
    <div class="col-md-6">
       
        


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#frmlogin">Primary</button>


        <!-- Button trigger modal -->
  <div class="modal" id="frmlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingreso de Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
          
            <div class="modal-body">               
        <form method="POST" action="<?php echo RUTA_URL . 'login/validarIngreso'; ?>">
            <div class="form-group">
                <label for="login">Usuario</label>
                <input type="text" class="form-control" id="login" aria-describedby="login" name="login" placeholder="Ingrese el usuario registrado en el sistema">
                <!--  <small id="login" class="form-text text-muted">Ingrese el usuario registrado en el sistema</small> -->
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            
    
                
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

        </div>
        </form>
    </div>
</div>






</div>  
    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>






<?php //require RUTA_APP . '/views/inc/footerLogin.php'; ?>
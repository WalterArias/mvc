var listarClientes = function () {
    var tabla1 = $("#tablaClientes").DataTable({
      ajax: {
        url: "http://localhost/mvc/Cliente/" + "listarClientes",
        dataSrc: "",
      },
      columns: [
        {
          data: "idcliente",
        },
        {
          data: "clientenombre",
        },
        {
          data: "clienteapellidos",
        },
        {
          defaultContent:
            "<button type='button' class ='AgregarCliente btn btn-sm btn-light' id = 'AgregarCliente' data-toggle='tooltip' data-placement='top' title='Selecciona Cliente'> <i class='bi bi-check2-square'></i></button>",
        },
      ],
      columnDefs: [
        {
          width: "20%",
          targets: 0,
        },
        {
          width: "30%",
          targets: 1,
        },
        {
          width: "40%",
          targets: 2,
        },
        {
          width: "10%",
          targets: 3,
        },
      ],
    });
    agregarCliente("#tablaClientes tbody", tabla1);
  };
  
  // logica de la interfaz para cargar los productos en la forma
  
  var listarProductos = function () {
    var tabla2 = $("#tablaArticulos").DataTable({
      ajax: {
        url: "http://localhost/mvc/Articulo/" + "listarArticulos",
        dataSrc: "",
      },
      columns: [
        {
          data: "idarticulo",
        },
        {
          data: "descripcion",
        },
        {
          data: "precio",
        },
        {
          defaultContent:
            "<button type='button' class =' AgregarArticulo btn btn-sm btn-light'  id = 'AgregarArticulo' data-toggle='tooltip' data-placement='top' title='Selecciona Articulo'> <i class='bi bi-check2-square'></i></button>",
        },
      ],
      columnDefs: [
        {
          width: "20%",
          targets: 0,
        },
        {
          width: "60%",
          targets: 1,
        },
        {
          width: "20%",
          targets: 2,
        },
      ],
    });
  
    agregarArticulo("#tablaArticulos tbody", tabla2);
  };
  
  /* var mostrarForm = function (estado) {
    if (estado) {
      $("#formulario").show();
      $("#vistatabla").hide();
    } else {
      $("#formulario").hide();
      $("#vistatabla").show();
    }
  };
   */
  var agregarArticulo = function (tbody, table) {
    $("#tablaArticulos tbody").on("click", "button", function () {
      let dato = table.row($(this).parents("tr")).data(); //captura el valor de la fila
      let cantidad = 0;
      let precio = 0;
      let subtotal = 0;
      let contadorFila = 0;
      let fila =
        `<tr class = "filas" id = "fila">
        <td> <input type = "text" name ="idArticulo[]" width = "25" value ="${dato.idarticulo}"></td>
        <td> <input type = "text" name ="descripcion[]" value ="${dato.descripcion}"></td>
        <td> <input type = "text" name ="cantidad[]" id ="cantidad" value ="${+cantidad}"></td>
        <td> <input type = "text" name ="precio[]" id ="precio" value ="${dato.precio}"></td>
        <td> <input type = "text" name ="subtotal[]" id ="subtotal" value ="${subtotal}"></td>
        <td> <button type='button' id = 'actualizaLinea' class='btn btn-secondary'>Actualiza</button></td>
        <td> <button type='button' id = 'eliminaLinea' class='btn btn-secondary'>Elimina</button></td>
        </tr>`;
      $("#detalle").append(fila);
      contadorFila = contadorFila + 1;
      $("#frmArticulos").modal("hide");
    });
  };
  
     
  
  var actualizarLinea = function(){
    $("#actualizaLinea").on("click", function (e) { 
      e.preventDefault();
      let result = parseInt($("#cantidad").val()) * parseInt($("#valor").val());
      $("#subtotal").val(result);
    });
  }
     
    
   
  
  
  var agregarCliente = function () {};
  
  $(document).ready(function () {
    agregarArticulo();
    listarClientes();
    listarProductos();
    agregarCliente();
  
    
  });
  
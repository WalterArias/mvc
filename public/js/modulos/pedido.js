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

var agregarArticulo = function (tbody, table) {
  $("#tablaArticulos tbody").on("click", "button", function () {
    let dato = table.row($(this).parents("tr")).data(); //captura el valor de la fila seleccionada en DataTable
    let cantidad = 5;
    let subtotal = 0;
    let contadorFila = 0; //para llevar el conteo de filas creadas
    let fila =
      '<tr class = "filas" id = "fila' +
      contadorFila +
      '">' +
      '<td class="col-sm-8" ><input type = "text" name ="idArticulo[]"  size="9" readonly value ="' +
      dato.idarticulo +
      '"></td>' +
      '<td> <input type = "text" name ="descripcion[]" readonly value ="' +
      dato.descripcion +
      '"></td>' +
      '<td class="col-sm-4"> <input type = "text"  name ="cantidad[]"   size="3" value ="' +
      +cantidad +
      '"></td>' +
      '<td> <input type = "text" name ="precio[]" id ="precio" size="9" pattern="^$d{1,3}(,d{3})*(.d+)?$" readonly value ="' +
      dato.precio +
      '"></td>' +
      '<td><input type = "text" name ="subtotal[]" id ="subtotal" pattern="^$d{1,3}(,d{3})*(.d+)?$" size="9" readonly value ="' +
      subtotal +
      '"></td>' +
      "<td> <button type='button' id = 'actualizar' onclick ='calcularSubtotalFila()' class='btn btn-secondary btn-sm'><i class='bi bi-arrow-repeat'></i></button>" +
      "</td>" +
      "<td> <button type='button' id = 'eliminaLinea' onclick ='eliminarFila(" +
      contadorFila +
      ")' class='btn btn-secondary btn-sm'><i class='bi bi-trash'></i></button>" +
      "</td>" +
      "</tr>";
    contadorFila++;
    $("#detalle").append(fila);
    $("#frmArticulos").modal("hide");   //cierra la modal
    calcularSubtotalFila();
  });
};

const calcularSubtotalFila = function () {
  //arrays para almacenar los valores de las filas
  let cant = document.getElementsByName("cantidad[]");
  let prec = document.getElementsByName("precio[]");
  let subt = document.getElementsByName("subtotal[]");
  //recorremos el array para hacer los calculos por fila
  for (let i = 0; i < cant.length; i++) {
    let cantInput = cant[i];
    let precInput = prec[i];
    let subtInput = subt[i];
    subtInput.value = cantInput.value * precInput.value;
  }
  calcularTotalPedido();
};

const calcularTotalPedido = function () {
  let subt = document.getElementsByName("subtotal[]");
  let total = 0.0;
  for (let i = 0; i < subt.length; i++) {
    total += parseInt(subt[i].value);
   
  }
  $("#granTotal").text("$ " + total);
};

const eliminarFila = function (indice) {
  $("#fila" + indice).remove();
  calcularTotalPedido();
};

const guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);   
    $.ajax({
      url: "http://localhost/mvc/Pedido/" + "crearPedido",,
      method: "POST",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        alert(data);
  
      })
      .fail(function (data) {
        alert("operacion fallida !");
        
      });
  });
};




var agregarCliente = function () {};

$(document).ready(function () {
  agregarArticulo();
  listarClientes();
  listarProductos();
  agregarCliente();
  calcularSubtotalFila();
  calcularTotalPedido();
  eliminarFila();
  
});

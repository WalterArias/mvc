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
  AgregarCliente("#tablaClientes tbody", tabla1);
};
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
 
  AgregarArticulo("#tablaArticulos tbody", tabla2)
};
 

var Nuevo = function () {
  $("#nuevo").on("click", function () {
    MostrarForm(true);
  });
};

var MostrarForm = function (estado) {
  if (estado) {
    $("#formulario").show();
    $("#vistatabla").hide();
  } else {
    $("#formulario").hide();
    $("#vistatabla").show();
  }
};

var AgregarArticulo = function (tbody, table) {
  $("#tablaArticulos tbody").on("click",'button',function(){
    var dato = table.row($(this).parents("tr")).data();
  let fila = '<tr class = filas id = fila>'+
  '<td> <input type = "text" name ="idArticulo" value ="'+dato.idarticulo+'"></td>'+
  '<td> <input type = "text" name ="idArticulo" value ="'+dato.descripcion+'"></td>'+
  '<td> <input type = "text" name ="idArticulo" value ="'+dato.precio+'"></td>'+
  '</tr>' 
  $("#detalle").append(fila);
});
};
var AgregarCliente = function(){

};

$(document).ready(function () {
  Nuevo();
  MostrarForm(false);
  AgregarArticulo();
  listarClientes();
  listarProductos();  
  AgregarCliente();

});
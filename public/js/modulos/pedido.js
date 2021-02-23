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
          "<button type='button' class ='selecciona btn btn-sm btn-light' data-toggle='tooltip' data-placement='top' title='Selecciona Cliente'> <i class='bi bi-check2-square'></i></button>",
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
          "<button type='button' class ='selecciona btn btn-sm btn-light' data-toggle='tooltip' data-placement='top' title='Selecciona Articulo'> <i class='bi bi-check2-square'></i></button>",
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

var AgregarDetalle = function (idarticulo, articulo) {

}

$(document).ready(function () {
  Nuevo();
  MostrarForm(false);
  AgregarDetalle();
  listarClientes();
  listarProductos();  

});
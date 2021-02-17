const RUTA_URL = "http://localhost/mvc/Cliente/";
var listarcliente = function () {
  var tabla = $("#mitabla").DataTable({
    ajax: {
      url: RUTA_URL + "listarClientes",
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
          "<button type='button' class ='editar btn btn-primary' data-toggle='tooltip' data-placement='top' title='Edita un cliente'> edita</button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-primary' data-toggle='tooltip' data-placement='top' title='Elimina un cliente'> elimina</button>",
      },
      {
        defaultContent:
          "<button type='button' class ='imprimir btn btn-primary' data-toggle='tooltip' data-placement='top' title='Imprimir'> imprime</button>",
      },
    
    ],
    columnDefs: [
      {
        width: "5%",
        targets: 0,
      },
      {
        width: "40%",
        targets: 1,
      },
      {
        width: "40%",
        targets: 2,
      },
        {
          width: "5%",
          targets: 3,
        },
        {
          width: "5%",
          targets: 4,
        },
        {
          width: "5%",
          targets: 5,
        },
      
    ],
  });
  editar("#mitabla tbody", tabla);
  eliminar("#mitabla tbody", tabla);
 
};

var nuevo = function () {
  $("#nuevo").on("click", function () {
    mostrarForm(true);
  });
};

var editar = function (tbody, table) {
  $(tbody).on("click", "button.editar", function () {
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true);
    var idcliente = $("#id").val(dato.idcliente);
    var nombre = $("#nombre").val(dato.clientenombre);
    var apellido = $("#apellido").val(dato.clienteapellidos);
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    console.log(datos);
    $.ajax({
      url: RUTA_URL + "crearCliente",
      method: "POST",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        alert(data);
        mostrarForm(false);
        $("#mitabla").DataTable().ajax.reload();
      })
      .fail(function (data) {
        alert("operacion fallida !");
        mostrarForm(false);
      });
  });
};

var limpiar = function () {
  $("#id").val("");
  $("#nombre").val("");
  $("#apellido").val("");
};

var cancelar = function () {
  $("#cancelar").on("click", function () {
    limpiar();
    mostrarForm(false);
    $("#mitabla").DataTable().ajax.reload();
  });
};

var mostrarForm = function (estado) {
  if (estado) {
    $("#formulario").show();
    $("#vistatabla").hide();
  } else {
    $("#formulario").hide();
    $("#vistatabla").show();
  }
};

var eliminar = function (tbody, table) {
  $(tbody).on("click", "button.eliminar", function () {
    var dato = table.row($(this).parents("tr")).data();
    var respuesta = confirm(
      "Seguro que desea eliminar ? : " +
        dato.clientenombre +
        " " +
        dato.clienteapellidos
    );
    if (respuesta) {
      $.ajax({
        method: "POST",
        url: RUTA_URL + "eliminarCliente",
        data: { id: dato.idcliente },
      })
        .done(function (data) {
          alert("Accion Realizada con exito !");
          $("#mitabla").DataTable().ajax.reload();
        })
        .fail(function (data) {
          alert("operacion fallida !");
        });
    } else {
      alert("Operacion cancelada por el usuario.");
    }
  });
};

var imprimir = function (tbody, table) {
  $(tbody).on("click", "button.imprimir", function () {
    window.location.href = RUTA_URL + "admin" + "/listarCliente";
  });
};

$(document).ready(function () {
  listarcliente();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  limpiar();
  mostrarForm(false);
});

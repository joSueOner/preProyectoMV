$(function(){
  promesaListado();


});

function promesaListado(){
  return new Promise(function(resolve, reject) {
      resolve(ajaxBuscar());
  });
}

function ajaxBuscar(){
  $('#tablaAyudas').DataTable({
    'lengthMenu':[[15,20,-1],[15,20,"Todas"]],
    'processing':  true,
    'ajax': {
      'dataType':'json',
      'contentType':'aplication/json; charset=utf-8',
      'url':'ajax/listadoEntregaDeAyudas.php',
      'dataSrc':function(json){
            console.log(json);
            return (json.listado);
      }
    },
    'columns':[
      {'data':'n'},
      {'data':'cedula'},
      {'data':'nombres'},
      {'data':'apellidos'},
      {'data':'montoA'},
      {'data':'fechaE'},
      {'data':'ente'},
    ],
    'language':{
    	"sProcessing":     "Procesando...",
    	"sLengthMenu":     "Mostrar _MENU_ registros",
    	"sZeroRecords":    "No se encontraron resultados",
    	"sEmptyTable":     "Ningún dato disponible en esta tabla",
    	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    	"sInfoPostFix":    "",
    	"sSearch":         "Buscar:",
    	"sUrl":            "",
    	"sInfoThousands":  ",",
    	"sLoadingRecords": "Cargando...",
    	"oPaginate": {
    		"sFirst":    "Primero",
    		"sLast":     "Último",
    		"sNext":     "Siguiente",
    		"sPrevious": "Anterior"
    	},
    	"oAria": {
    		"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    		"sSortDescending": ": Activar para ordenar la columna de manera descendente"
    	}
    },

    dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]


  });

}

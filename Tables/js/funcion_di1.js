$(document).on("ready", function(){
	listar();
});


var listar = function(){
	var table = $('#usuarios').DataTable( {
		"ajax":{
			"method":"POST",
			"url": "listar.php"
		},
		"columns":[
			{"data":"campo1"},
			{"data":"campo2"},
			{"data":"campo3"},
			{"data":"campo4"},
      {"data":"campo5"},
      {"data":"campo6"},
			{"defaultContent": "<button type='button' class='editar btn btn-info btn-sm'><i class='fa fa-edit fa-sm'></i></button>&nbsp;"+
								"<button type='button' class='eliminar btn btn-danger btn-sm' ><i class='fa fa-trash fa-sm'></i></button>"
			}
		],
		"language": idioma_espanol,
		"dom": 
		"<'row'<'offset-sm-12 offset-md-4'B>>" +
		"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
		"<'row'<'col-sm-12'tr>>" +
		"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
		"buttons":[
			{
				text: "<i class='fa fa-plus aria-hidden=true'></i>",
				titleAttr: "Agregar",
				className: "btn btn-dark",

			},{
				
				"text": "<i class='fas fa-recycle'></i>",
				"titleAttr": "Reactivar",
				className: "btn btn-warning",

			},{
        extend: 'copy', 
        "text": "<i class='fa fa-clone aria-hidden=true' ></i>",
        "titleAttr": "Copiar",
        "className": "btn btn-default",

      },{
        extend: 'csv', 
        "text":'<i class="fas fa-file-csv"></i>',
        "titleAttr": "CSV",
        "className": "btn btn-primary",

      },{
        extend: 'excel', 
        "text": '<i class="fas fa-file-excel"></i>',
        "titleAttr": "Excel",
        "className": "btn btn-success",

      },{
        extend: 'pdf', 
        "text":'<i class="fas fa-file-pdf"></i>',
        "titleAttr": "PDF",
        "className": "btn btn-danger",

      },{
        extend: 'print', 
        "text":'<i class="fa fa-print aria-hidden= true"></i>',
        "titleAttr": "Imprimir",
        "className": "btn btn-info",

      }
		]
	});
	obtener_data_control("#usuarios tbody", table);
	obtener_data_editar("#usuarios tbody", table);
	obtener_id_eliminar("#usuarios tbody", table);
	
}

var obtener_data_control = function(tbody, table){
	$(tbody).on("click", "button.control", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var cve_usuario = data.cve_usuario;
		//location.href='../deta_conexion/index.php?idx='+data.Id_usr+'';
	});
}

var obtener_data_editar = function(tbody, table){//a nivel registro obtengo algunos valores para poder realizar en este caso la edicion. y lo mando a updateuser.php la clave
	$(tbody).on("click", "button.editar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var cve_usu = data.cve_usuario;
		//alert(nomenv);
		 location.href = 'updateUser.php?cve='+cve_usu;
	});
}

var obtener_id_eliminar = function(tbody, table){
	$(tbody).on("click", "button.eliminar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var cve_usuario = data.cve_usuario;
		//alert(idusuario);
		elimina(cve_usuario);
	});
}

var idioma_espanol = {
	"decimal":        "",
	"emptyTable":     "No hay información para mostrar",
	"info":           "Mostrando de _START_ a _END_ registros",
	"infoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
	"infoFiltered":   "(filtrado de un total de _MAX_ registros)",
	"infoPostFix":    "",
	"thousands":      ",",
	"lengthMenu":     "Mostrar _MENU_ registros",
	"loadingRecords": "Cargando...",
	"processing":     "Procesando...",
	"search":         "Buscar:",
	"zeroRecords":    "No se encontró información para mostrar",
	"paginate": {
	    "first":      "Primero",
	    "last":       "Ultimo",
	    "next":       "Siguiente",
	    "previous":   "Anterior"
	},
	"aria": {
	    "sortAscending":  ": activate to sort column ascending",
	    "sortDescending": ": activate to sort column descending"
	}
}


		
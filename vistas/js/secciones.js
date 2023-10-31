/*=============================================
            EDITAR SECCION            
=============================================*/

$(".btnEditarSeccion").click(function(){

	var idSeccion = $(this).attr("idSeccion");

	var datos = new FormData();
	datos.append("idSeccion", idSeccion);

	$.ajax({

		url: "ajax/secciones.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#editarSeccion").val(respuesta["nombre"]);
			$("#idSeccion").val(respuesta["id"]);
		}
	})
})


/*=============================================
            ELIMINAR SECCION            
=============================================*/

$(".btnEliminarSeccion").click(function(){

	var idSeccion = $(this).attr("idSeccion");

	swal({
		title: 'Está seguro de borrar la sección?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar sección'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=secciones&idSeccion="+idSeccion;
			}
		})
})


/*=============================================
            ACTIVAR SECCION            
=============================================*/

$(document).on("click", ".btnActivar", function(){

	var idSeccion = $(this).attr("idSeccion");
	var estadoSeccion = $(this).attr("estadoSeccion");

	var datos = new FormData();
	datos.append("activarId", idSeccion);
	datos.append("activarSeccion", estadoSeccion);

	$.ajax({

		url: "ajax/secciones.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			if (window.matchMedia("(max-width:767px)").matches) {

				swal({
					title: "La sección ha sido actualizada",
					type: "success",
					confirmButtonText: "Cerrar"
				}).then(function(result){

					if (result.value) {

						window.location = "secciones";
					}
				});
			}
		}
	})

	if (estadoSeccion ==0) {

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html('Desactivado');
		$(this).attr('estadoSeccion', 1);

	}else{

		$(this).addClass('btn-success');
		$(this).removeClass('btn-danger');
		$(this).html('Activado');
		$(this).attr('estadoSeccion', 0);
	}
})


/*=============================================
EDITAR NOTA PRIMERO CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnEditarNota1cb", function(){

//$(".btnEditarNota1cb").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){	

		//console.log(respuesta["nota2"]);		


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
			$("#editarCuartoBimestre").val(respuesta["bimestre4"]);
			$("#editarNota4").val(respuesta["nota4"]);
			$("#editarTotal4").val(respuesta["clases4"]);
			$("#editarAsistencia4").val(respuesta["asistencia4"]);


								
		}
	})

	
})


/*=============================================
EDITAR NOTA SEGUNDO CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnEditarNota2cb", function(){

//$(".btnEditarNota2cb").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
			$("#editarCuartoBimestre").val(respuesta["bimestre4"]);
			$("#editarNota4").val(respuesta["nota4"]);
			$("#editarTotal4").val(respuesta["clases4"]);
			$("#editarAsistencia4").val(respuesta["asistencia4"]);
	


								
		}
	})

	
})

/*=============================================
EDITAR NOTA PRIMERO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnEditarNota1cs", function(){

//$(".btnEditarNota1cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
			$("#editarCuartoBimestre").val(respuesta["bimestre4"]);
			$("#editarNota4").val(respuesta["nota4"]);
			$("#editarTotal4").val(respuesta["clases4"]);
			$("#editarAsistencia4").val(respuesta["asistencia4"]);	


								
		}
	})

	
})


/*=============================================
EDITAR NOTA PRIMERO A CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnEditarNota1acs", function(){

//$(".btnEditarNota1acs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
					


								
		}
	})

	
})


/*=============================================
EDITAR NOTA SEGUNDO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnEditarNota2cs", function(){

//$(".btnEditarNota2cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
			$("#editarCuartoBimestre").val(respuesta["bimestre4"]);
			$("#editarNota4").val(respuesta["nota4"]);
			$("#editarTotal4").val(respuesta["clases4"]);
			$("#editarAsistencia4").val(respuesta["asistencia4"]);					


								
		}
	})

	
})

/*=============================================
EDITAR NOTA TERCERO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnEditarNota3cs", function(){

//$(".btnEditarNota3cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
			$("#editarCuartoBimestre").val(respuesta["bimestre4"]);
			$("#editarNota4").val(respuesta["nota4"]);
			$("#editarTotal4").val(respuesta["clases4"]);
			$("#editarAsistencia4").val(respuesta["asistencia4"]);			


								
		}
	})

	
})


/*=============================================
EDITAR NOTA CUARTO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnEditarNota4cs", function(){

//$(".btnEditarNota4cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);
			$("#editarPrimerBimestre").val(respuesta["bimestre1"]);
			$("#editarNota1").val(respuesta["nota1"]);
			$("#editarTotal1").val(respuesta["clases1"]);
			$("#editarAsistencia1").val(respuesta["asistencia1"]);
			$("#editarSegundoBimestre").val(respuesta["bimestre2"]);
			$("#editarNota2").val(respuesta["nota2"]);			
			$("#editarTotal2").val(respuesta["clases2"]);
			$("#editarAsistencia2").val(respuesta["asistencia2"]);
			$("#editarTercerBimestre").val(respuesta["bimestre3"]);
			$("#editarNota3").val(respuesta["nota3"]);
			$("#editarTotal3").val(respuesta["clases3"]);
			$("#editarAsistencia3").val(respuesta["asistencia3"]);
			$("#editarCuartoBimestre").val(respuesta["bimestre4"]);
			$("#editarNota4").val(respuesta["nota4"]);
			$("#editarTotal4").val(respuesta["clases4"]);
			$("#editarAsistencia4").val(respuesta["asistencia4"]);				


								
		}
	})

	
})


/*=============================================
VER NOTA PRIMERO CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnVerNota1cb", function(){

//$(".btnVerNota1cb").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);
			$("#verCuartoBimestre").val(respuesta["bimestre4"]);
			$("#verCuartoBimestre").html(respuesta["bimestre4"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);
			$("#verNota4").val(respuesta["nota4"]);
			$("#verNota4").html(respuesta["nota4"]);


			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
			$("#verTotal4").val(respuesta["clases4"]);
			$("#verAsistencia4").val(respuesta["asistencia4"]);


			

								
		}
	})

	
})


/*=============================================
VER NOTA SEGUNDO CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnVerNota2cb", function(){

//$(".btnVerNota2cb").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);
			$("#verCuartoBimestre").val(respuesta["bimestre4"]);
			$("#verCuartoBimestre").html(respuesta["bimestre4"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);
			$("#verNota4").val(respuesta["nota4"]);
			$("#verNota4").html(respuesta["nota4"]);	

			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
			$("#verTotal4").val(respuesta["clases4"]);
			$("#verAsistencia4").val(respuesta["asistencia4"]);


								
		}
	})

	
})


/*=============================================
VER NOTA PRIMERO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnVerNota1cs", function(){

//$(".btnVerNota1cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);
			$("#verCuartoBimestre").val(respuesta["bimestre4"]);
			$("#verCuartoBimestre").html(respuesta["bimestre4"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);
			$("#verNota4").val(respuesta["nota4"]);
			$("#verNota4").html(respuesta["nota4"]);	

			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
			$("#verTotal4").val(respuesta["clases4"]);
			$("#verAsistencia4").val(respuesta["asistencia4"]);			


								
		}
	})

	
})


/*=============================================
VER NOTA PRIMERO A CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnVerNota1acs", function(){

//$(".btnVerNota1acs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);

			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
		

								
		}
	})

	
})


/*=============================================
VER NOTA SEGUNDO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnVerNota2cs", function(){

//$(".btnVerNota2cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);
			$("#verCuartoBimestre").val(respuesta["bimestre4"]);
			$("#verCuartoBimestre").html(respuesta["bimestre4"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);
			$("#verNota4").val(respuesta["nota4"]);
			$("#verNota4").html(respuesta["nota4"]);

			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
			$("#verTotal4").val(respuesta["clases4"]);
			$("#verAsistencia4").val(respuesta["asistencia4"]);				


								
		}
	})

	
})

/*=============================================
VER NOTA TERCERO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnVerNota3cs", function(){

//$(".btnVerNota3cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);
			$("#verCuartoBimestre").val(respuesta["bimestre4"]);
			$("#verCuartoBimestre").html(respuesta["bimestre4"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);
			$("#verNota4").val(respuesta["nota4"]);
			$("#verNota4").html(respuesta["nota4"]);	

			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
			$("#verTotal4").val(respuesta["clases4"]);
			$("#verAsistencia4").val(respuesta["asistencia4"]);		


								
		}
	})

	
})


/*=============================================
VER NOTA CUARTO E CICLO SUPERIOR
=============================================*/

$(".tablas").on("click", ".btnVerNota4cs", function(){

//$(".btnVerNota4cs").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");


	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/notas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){			


			$("#idAlumno").val(respuesta["id"]);

			$("#verPrimerBimestre").val(respuesta["bimestre1"]);
			$("#verPrimerBimestre").html(respuesta["bimestre1"]);
			$("#verSegundoBimestre").val(respuesta["bimestre2"]);
			$("#verSegundoBimestre").html(respuesta["bimestre2"]);
			$("#verTercerBimestre").val(respuesta["bimestre3"]);
			$("#verTercerBimestre").html(respuesta["bimestre3"]);
			$("#verCuartoBimestre").val(respuesta["bimestre4"]);
			$("#verCuartoBimestre").html(respuesta["bimestre4"]);


			$("#verNota1").val(respuesta["nota1"]);
			$("#verNota1").html(respuesta["nota1"]);
			$("#verNota2").val(respuesta["nota2"]);
			$("#verNota2").html(respuesta["nota2"]);
			$("#verNota3").val(respuesta["nota3"]);
			$("#verNota3").html(respuesta["nota3"]);
			$("#verNota4").val(respuesta["nota4"]);
			$("#verNota4").html(respuesta["nota4"]);	

			$("#verTotal1").val(respuesta["clases1"]);
			$("#verAsistencia1").val(respuesta["asistencia1"]);
			$("#verTotal2").val(respuesta["clases2"]);
			$("#verAsistencia2").val(respuesta["asistencia2"]);
			$("#verTotal3").val(respuesta["clases3"]);
			$("#verAsistencia3").val(respuesta["asistencia3"]);
			$("#verTotal4").val(respuesta["clases4"]);
			$("#verAsistencia4").val(respuesta["asistencia4"]);			


								
		}
	})

	
})


/*=============================================
IMPRIMIR NOTA
=============================================*/

$(".tablas").on("click", ".btnImprimirNota", function(){

//$(".btnImprimirNota").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var informe = $(this).attr("informe");

	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&informe="+informe, "_blank");

})

/*=============================================
IMPRIMIR NOTA GLOBAL
=============================================*/

$(".btnListado").click(function(){

	var idCurso = $(this).attr("idCurso");
	var tabla = $(this).attr("tabla");
	var informeGlobal = $(this).attr("informeGlobal");



	window.open("extensiones/tcpdf/pdf/"+informeGlobal+".php?idcurso="+idCurso+"&tabla="+tabla+"&informeGlobal="+informeGlobal, "_blank");

})
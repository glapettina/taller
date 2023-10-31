<?php

	class ControladorNotas{


		/*=============================================
		MOSTRAR NOTAS            
		=============================================*/		

		static public function ctrMostrarNotas($item, $valor, $tabla, $verifica){
			

			$respuesta = ModeloNotas::mdlMostrarNotas($item, $valor, $tabla, $verifica);

			return $respuesta;

			//var_dump($respuesta);

		}

		/*=============================================
		MOSTRAR NOTAS GLOBAL            
		=============================================*/		

		static public function ctrMostrarNotasGlobal($item, $valor, $tabla){

			//$tabla = "primerocb";

			$respuesta = ModeloNotas::mdlMostrarNotasGlobal($item, $valor, $tabla);

			return $respuesta;

		}

		/*=============================================
		EDITAR NOTA PRIMERO CICLO BASICO
		=============================================*/

		static public function ctrEditarNota1cb($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "bimestre4" => $_POST["editarCuartoBimestre"], "nota4" => $_POST["editarNota4"], "clases4" => $_POST["editarTotal4"], "asistencia4" => $_POST["editarAsistencia4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota1cb($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR NOTA SEGUNDO CICLO BASICO
		=============================================*/

		static public function ctrEditarNota2cb($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "bimestre4" => $_POST["editarCuartoBimestre"], "nota4" => $_POST["editarNota4"], "clases4" => $_POST["editarTotal4"], "asistencia4" => $_POST["editarAsistencia4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota2cb($tabla, $curso, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR NOTA PRIMERO E CICLO SUPERIOR
		=============================================*/

		static public function ctrEditarNota1cs($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "bimestre4" => $_POST["editarCuartoBimestre"], "nota4" => $_POST["editarNota4"], "clases4" => $_POST["editarTotal4"], "asistencia4" => $_POST["editarAsistencia4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota1cs($tabla, $curso, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR NOTA PRIMERO A CICLO SUPERIOR
		=============================================*/

		static public function ctrEditarNota1acs($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota1acs($tabla, $curso, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR NOTA SEGUNDO E CICLO SUPERIOR
		=============================================*/

		static public function ctrEditarNota2cs($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "bimestre4" => $_POST["editarCuartoBimestre"], "nota4" => $_POST["editarNota4"], "clases4" => $_POST["editarTotal4"], "asistencia4" => $_POST["editarAsistencia4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota2cs($tabla, $curso, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR NOTA TERCERO E CICLO SUPERIOR
		=============================================*/

		static public function ctrEditarNota3cs($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "bimestre4" => $_POST["editarCuartoBimestre"], "nota4" => $_POST["editarNota4"], "clases4" => $_POST["editarTotal4"], "asistencia4" => $_POST["editarAsistencia4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota3cs($tabla, $curso, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR NOTA CUARTO E CICLO SUPERIOR
		=============================================*/

		static public function ctrEditarNota4cs($tabla,$curso){

			if (isset($_POST["editarPrimerBimestre"])) {
								

					$datos = array("bimestre1" => $_POST["editarPrimerBimestre"], "nota1" => $_POST["editarNota1"], "clases1" => $_POST["editarTotal1"], "asistencia1" => $_POST["editarAsistencia1"], "bimestre2" => $_POST["editarSegundoBimestre"], "nota2" => $_POST["editarNota2"], "clases2" => $_POST["editarTotal2"], "asistencia2" => $_POST["editarAsistencia2"], "bimestre3" => $_POST["editarTercerBimestre"], "nota3" => $_POST["editarNota3"], "clases3" => $_POST["editarTotal3"], "asistencia3" => $_POST["editarAsistencia3"], "bimestre4" => $_POST["editarCuartoBimestre"], "nota4" => $_POST["editarNota4"], "clases4" => $_POST["editarTotal4"], "asistencia4" => $_POST["editarAsistencia4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloNotas::mdlEditarNota4cs($tabla, $curso, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La nota ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		
		
	}

 
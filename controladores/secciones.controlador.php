<?php

	class ControladorSecciones{

		/*=============================================
		            CREAR SECCIONES            
		=============================================*/

		static public function ctrCrearSeccion(){

			if (isset($_POST["nuevaSeccion"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaSeccion"])) {
					
					$tabla = "secciones";

					$datos = $_POST["nuevaSeccion"];

					$respuesta = ModeloSecciones::mdlCrearSeccion($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La sección ha sido guardada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "secciones";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "La sección no puede ir vacía o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "secciones";										
								}
							})

					</script>';
				}
			}
		}
		

		/*=============================================
		            MOSTRAR SECCIONES            
		=============================================*/		

		static public function ctrMostrarSecciones($item, $valor){

			$tabla = "secciones";

			$respuesta = ModeloSecciones::mdlMostrarSecciones($tabla, $item, $valor);

			return $respuesta;

		}

		/*=============================================
		            EDITAR SECCION
		=============================================*/

		static public function ctrEditarSeccion(){

			if (isset($_POST["editarSeccion"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarSeccion"])) {
					
					$tabla = "secciones";

					$datos = array("nombre" => $_POST["editarSeccion"], "id" => $_POST["idSeccion"]);

					$respuesta = ModeloSecciones::mdlEditarSeccion($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La sección ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "secciones";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "La sección no puede ir vacía o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "secciones";										
								}
							})

					</script>';
				}
			}
		}

		/*=============================================
		            BORRAR SECCION
		=============================================*/

		static public function ctrBorrarSeccion(){

			if (isset($_GET["idSeccion"])) {
				
				$tabla = "secciones";
				$datos = $_GET["idSeccion"];

				$respuesta = ModeloSecciones::mdlBorrarSeccion($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "La sección ha sido borrada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "secciones";
								}
							})

					</script>';
				}
			}
		}
		
	}

 
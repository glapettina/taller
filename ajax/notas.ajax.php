<?php

	require_once "../controladores/notas.controlador.php";
	require_once "../modelos/notas.modelo.php";

	class AjaxNotas{

		/*=============================================
		EDITAR NOTA         
		=============================================*/

		public $idAlumno;
		public $tabla;

		public function ajaxEditarNota(){

			$item = "id";
			$valor = $this->idAlumno;
			$tabla = $this->tabla;
			$verifica = false;

			$respuesta = ControladorNotas::ctrMostrarNotas($item, $valor, $tabla, $verifica);


			echo json_encode($respuesta);


		}	
		
	}

	/*=============================================
	EDITAR NOTA          
	=============================================*/

	if (isset($_POST["idAlumno"])) {
		
		$nota = new AjaxNotas();
		$nota -> idAlumno = $_POST["idAlumno"];
		$nota -> tabla = $_POST["tabla"];
		$nota -> ajaxEditarNota();
	}



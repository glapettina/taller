<?php

	require_once "../controladores/secciones.controlador.php";
	require_once "../modelos/secciones.modelo.php";

	class AjaxSecciones{

		/*=============================================
		            EDITAR SECCION           
		=============================================*/

		public $idSeccion;

		public function ajaxEditarSeccion(){

			$item = "id";
			$valor = $this->idSeccion;

			$respuesta = ControladorSecciones::ctrMostrarSecciones($item, $valor);

			echo json_encode($respuesta);

		}		


		/*=============================================
		ACTIVAR SECCION
		=============================================*/

		public $activarSeccion;
		public $activarId;

		public function ajaxActivarSeccion(){

			$tabla = "secciones";

			$item1 = "estado";
			$valor1 = $this->activarSeccion;

			$item2 = "id";
			$valor2 = $this->activarId;

			$respuesta = ModeloSecciones::mdlActualizarSeccion($tabla, $item1, $valor1, $item2, $valor2);

		}
		
		
	}

	/*=============================================
		            EDITAR SECCION          
	=============================================*/

	if (isset($_POST["idSeccion"])) {
		
		$seccion = new AjaxSecciones();
		$seccion -> idSeccion = $_POST["idSeccion"];
		$seccion -> ajaxEditarSeccion();
	}


	/*=============================================
	ACTIVAR SECCION
	=============================================*/

		if (isset($_POST["activarSeccion"])) {
			
			$activarSeccion = new AjaxSecciones();
			$activarSeccion -> activarSeccion = $_POST["activarSeccion"];
			$activarSeccion -> activarId = $_POST["activarId"];
			$activarSeccion -> ajaxActivarSeccion();

		}
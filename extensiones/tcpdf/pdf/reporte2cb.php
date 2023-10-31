<?php

require_once "../../../controladores/notas.controlador.php";
require_once "../../../modelos/notas.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $id;

	public function traerImpresionReporte(){

		// TRAEMOS LA INFORMACION DE LAS NOTAS

		$itemNota = "id";
		$valorNota = $this->id;
		$tablaNota = "segundocb";
		$verifica = false;

		$respuestaNota = ControladorNotas::ctrMostrarNotas($itemNota, $valorNota, $tablaNota, $verifica);

		$nombre = $respuestaNota["nombre"];
		$idCurso = $respuestaNota["id_curso"];
		$bimestre1 = $respuestaNota["bimestre1"];
		$nota1 = $respuestaNota["nota1"];
		$clases1 = $respuestaNota["clases1"];
		$asistencia1 = $respuestaNota["asistencia1"];
		$bimestre2 = $respuestaNota["bimestre2"];
		$nota2 = $respuestaNota["nota2"];
		$clases2 = $respuestaNota["clases2"];
		$asistencia2 = $respuestaNota["asistencia2"];
		$bimestre3 = $respuestaNota["bimestre3"];
		$nota3 = $respuestaNota["nota3"];
		$clases3 = $respuestaNota["clases3"];
		$asistencia3 = $respuestaNota["asistencia3"];
		$bimestre4 = $respuestaNota["bimestre4"];
		$nota4 = $respuestaNota["nota4"];
		$clases4 = $respuestaNota["clases4"];
		$asistencia4 = $respuestaNota["asistencia4"];




		
		
		


		if ($nota1 == 0) {
				
			$nota1 = "";
		}

		if ($nota2 == 0) {
				
			$nota2 = "";
		}

		if ($nota3 == 0) {
				
			$nota3 = "";
		}

		if ($nota4 == 0) {
				
			$nota4 = "";
		}

				

		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $respuestaNota["id_curso"];
		$tablaCurso = "primerocb";

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];
	


require_once('tcpdf_include.php');

//$pdf=new FPDF(‘L’,’cm’,’A4’);

$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();


//--------------------------------------------------------------------------------

$bloque1 = <<<EOF

	<table>

		<tr>

			<td style="width: 150px"><img src="images/logo.jpg"></td>

			<td style="background-color:white; width:450px">

				<div style="font-size:12px; text-align:center; line-height:15px;">

					<br>
					Centro de Educación Técnica Nº 13

					<br>
					Amed Alí Chaiteli
					

				</div>

			</td>

			<td style="background-color:white; width:200px">

				<div style="font-size:12px; text-align:right; line-height:15px;">

					<br>
					Enseñanza Práctica

				</div>

			</td>


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque1, false, false, false, false, '');

//----------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="width:540px"><img src="images/backFact2.jpg"></td>

		</tr>

		<tr>

			<td style="border: 1px solid #666; background-color:white; width:200px">

				<br>

				$respuestaNota[nombre]


			</td>

			<td style="border: 1px solid #666; background-color:white; width:120px">

				<br>

				Curso: $respuestaCurso[nombre]


			</td>

			<td style="border: 1px solid #666; background-color:white; width:100px">

				<br>

				Turno: $respuestaCurso[turno]


			</td>

			<td style="border: 1px solid #666; background-color:white; width:120px">

				<br>

				Ciclo Lectivo: 2022


			</td>

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------

//----------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="width:540px"><img src="images/backFact2.jpg"></td>

		</tr>

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Primer Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				Clases


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				Asistencia


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Segundo Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				Clases


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				Asistencia


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Tercer Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				Clases


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				Asistencia


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Cuarto Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				Clases


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				Asistencia


			</td>

			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque3, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque4 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bimestre1


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				$clases1


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				$asistencia1


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bimestre2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				$clases2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				$asistencia2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bimestre3


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				$clases3


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				$asistencia3


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bimestre4


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:55px">

				<br>

				$clases4


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:70px">

				<br>

				$asistencia4


			</td>


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque4, false, false, false, false, '');

//--------------------------------------------------------


//----------------------------------------------------------------------------------


$bloque5 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Nota


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:125px">

				<br>

				$nota1


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Nota


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:125px">

				<br>

				$nota2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Nota


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:125px">

				<br>

				$nota3


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Nota


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:125px">

				<br>

				$nota4


			</td>
		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque5, false, false, false, false, '');

//--------------------------------------------------------

//SALIDA DEL ARCHIVO

$pdf->Output('informe_'.$nombre.'.pdf');


}
}

$reporte = new imprimirReporte();
$reporte -> id = $_GET["id"];
$reporte -> informe = $_GET["informe"];
$reporte -> traerImpresionReporte();


?>
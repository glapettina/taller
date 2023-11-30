<?php

require_once "../../../controladores/notas.controlador.php";
require_once "../../../modelos/notas.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporteGlobal{


	public $idcurso;

	public function traerImpresionReporteGlobal(){

		// TRAEMOS LA INFORMACION DE LAS NOTAS

		$itemNota = "id_curso";
		$valorNota = $this->idcurso;
		$tablaNota = $this->tabla;

		$respuestaGlobal = ControladorNotas::ctrMostrarNotasGlobal($itemNota, $valorNota, $tablaNota);


		

		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $valorNota;
		$tablaCurso = $this->tabla;

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];



require_once('tcpdf_include.php');

//$pdf=new FPDF(‘L’,’cm’,’A4’);

$pdf = new TCPDF('L', PDF_UNIT, 'LEGAL', true, 'UTF-8', false);

$pdf->setPrintHeader(false); //Ahora no imprimirá cabecera
$pdf->setPrintFooter(true); //Ahora si imprimirá pie de página

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set margins
$pdf->SetMargins(8, 8, 3);
$pdf->SetHeaderMargin(10);
$pdf->SetFooterMargin(8);


$pdf->startPageGroup();

$pdf->AddPage();


//--------------------------------------------------------------------------------

$bloque1 = <<<EOF

	<table>

		<tr>

			<td style="width: 150px"><img src="images/logo.jpg"></td>

			<td style="background-color:white; width:650px">

				<div style="font-size:12px; text-align:center; line-height:15px;">

					<br>
					Centro de Educación Técnica Nº 13

					<br>
					Amed Alí Chaiteli
					

				</div>

			</td>

			<td style="background-color:white; width:150px">

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

				Ciclo Lectivo: 2023


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

		<td style="text-align: center; border: 1px solid #666; background-color:white; width:225px">

				<br>

				Estudiante


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:115px">

				<br>

				Primer Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:115px">

				<br>

				Segundo Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Promedio


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:115px">

				<br>

				Tercer Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:115px">

				<br>

				Cuarto Bimestre


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Promedio


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				Promedio Final


			</td>

			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque3, false, false, false, false, '');

//--------------------------------------------------------



//----------------------------------------------------------------------------------


foreach ($respuestaGlobal as $key => $item) {


		$bim1 = $item["bimestre1"];
		$not1 = $item["nota1"];
		$bim2 = $item["bimestre2"];
		$not2 = $item["nota2"];
		$bim3 = $item["bimestre3"];
		$not3 = $item["nota3"];
		$bim4 = $item["bimestre4"];
		$not4 = $item["nota4"];


		// $car = $item["carpinteria"];
		// $hoj = $item["hojalateria"];
		// $ele = $item["electricidad"];
		// $aju = $item["ajuste"];

		if ($not1 == 0) {
			
			$not1 = "";
		}

		if ($not2 == 0) {
			
			$not2 = "";
		}

		if ($not3 == 0) {
			
			$not3 = "";
		}

		if ($not4 == 0) {
			
			$not4 = "";
		}



		if ($not1 != 0 && $not2 == 0 && $not3 == 0 && $not4 == 0) {
				

				$promedio1 = "";

				$promedio2 = "";

				$promedioFinal = "";

			}else if($not1 != 0 && $not2 != 0 && $not3 == 0 && $not4 == 0){

				$promedio1 = ($not1 + $not2) / number_format(2);
			
				$promedio2 = "";

				$promedioFinal = "";

			}else if($not1 != 0 && $not2 != 0 && $not3 != 0 && $not4 == 0){

				$promedio1 = ($not1 + $not2) / number_format(2);
			
				$promedio2 = "";

				$promedioFinal = "";

			}else if($not1 != 0 && $not2 != 0 && $not3 != 0 && $not4 != 0){
			
					$promedio1 = ($not1 + $not2) / number_format(2);
			
					$promedio2 = ($not3 + $not4) / number_format(2);

					$promedioFinal = ($promedio1 + $promedio2) /2;

			}else if($not1 == 0 && $not2 == 0 && $not3 == 0 && $not4 == 0){

				$promedio1 = "";

				$promedio2 = "";

				$promedioFinal = "";

			}	



		// $promedio1 = (number_format($item["carpinteria"]) + number_format($item["hojalateria"])) / number_format(2);
		// $promedio2 = (number_format($item["electricidad"]) + number_format($item["ajuste"])) / number_format(2);
		// $promedioFinal = ($promedio1 + $promedio2) /2;
		
		

		if ($promedio1 == 0) {
				
			$promedio1 = "";
		}

		if ($promedio2 == 0) {
				
			$promedio2 = "";
		}

		if ($promedioFinal == 0) {
				
			$promedioFinal = "";
		}
	


$bloque5 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: left; border: 1px solid #666; background-color:white; width:225px">

				<br>

				$item[nombre]


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bim1


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:40px">

				<br>

				$not1


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bim2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:40px">

				<br>

				$not2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$promedio1


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bim3


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:40px">

				<br>

				$not3


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$bim4


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:40px">

				<br>

				$not4


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$promedio2


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:75px">

				<br>

				$promedioFinal


			</td>





		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque5, false, false, false, false, '');


}

//--------------------------------------------------------



//SALIDA DEL ARCHIVO

$pdf->Output('informe_'.$curso.'_'.$turno.'.pdf');


}
}

$reporte = new imprimirReporteGlobal();
$reporte -> idcurso = $_GET["idcurso"];
$reporte -> tabla = $_GET["tabla"];
$reporte -> traerImpresionReporteGlobal();


?>
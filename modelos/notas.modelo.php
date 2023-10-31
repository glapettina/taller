<?php

	require_once "conexion.php";

	class ModeloNotas{


		/*=============================================
		MOSTRAR PROMEDIO
		=============================================*/

		static public function mdlMostrarPromedioC($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT avg(carpinteria) AS total FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;

		}

		/*=============================================
		MOSTRAR PROMEDIO
		=============================================*/

		static public function mdlMostrarPromedioH($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT avg(hojalateria) AS total FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;

		}

		/*=============================================
		MOSTRAR PROMEDIO
		=============================================*/

		static public function mdlMostrarPromedioE($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT avg(electricidad) AS total FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;

		}

		/*=============================================
		MOSTRAR PROMEDIO
		=============================================*/

		static public function mdlMostrarPromedioA($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT avg(ajuste) AS total FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;

		}
		

		/*=============================================
		MOSTRAR NOTAS
		=============================================*/

		static public function mdlMostrarNotas($item, $valor, $tabla, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND estado = 1");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}



		/*=============================================
		MOSTRAR NOTAS GLOBAL
		=============================================*/

		static public function mdlMostrarNotasGlobal($item, $valor, $tabla){

				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND estado = 1 ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();

				$stmt -> close();

				$stmt = null;
		}

		/*=============================================
		EDITAR NOTA PRIMERO CICLO BASICO            
		=============================================*/

		static public function mdlEditarNota1cb($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, bimestre4 = :bimestre4, nota4 = :nota4, clases4 = :clases4, asistencia4 = :asistencia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre4", $datos["bimestre4"], PDO::PARAM_STR);
			$stmt->bindParam(":nota4", $datos["nota4"], PDO::PARAM_STR);
			$stmt->bindParam(":clases4", $datos["clases4"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia4", $datos["asistencia4"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR NOTA SEGUNDO CICLO BASICO            
		=============================================*/

		static public function mdlEditarNota2cb($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, bimestre4 = :bimestre4, nota4 = :nota4, clases4 = :clases4, asistencia4 = :asistencia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre4", $datos["bimestre4"], PDO::PARAM_STR);
			$stmt->bindParam(":nota4", $datos["nota4"], PDO::PARAM_STR);
			$stmt->bindParam(":clases4", $datos["clases4"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia4", $datos["asistencia4"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR NOTA PRIMERO E CICLO SUPERIOR            
		=============================================*/

		static public function mdlEditarNota1cs($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, bimestre4 = :bimestre4, nota4 = :nota4, clases4 = :clases4, asistencia4 = :asistencia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre4", $datos["bimestre4"], PDO::PARAM_STR);
			$stmt->bindParam(":nota4", $datos["nota4"], PDO::PARAM_STR);
			$stmt->bindParam(":clases4", $datos["clases4"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia4", $datos["asistencia4"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR NOTA PRIMERO A CICLO SUPERIOR            
		=============================================*/

		static public function mdlEditarNota1acs($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR NOTA SEGUNDO E CICLO SUPERIOR            
		=============================================*/

		static public function mdlEditarNota2cs($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, bimestre4 = :bimestre4, nota4 = :nota4, clases4 = :clases4, asistencia4 = :asistencia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre4", $datos["bimestre4"], PDO::PARAM_STR);
			$stmt->bindParam(":nota4", $datos["nota4"], PDO::PARAM_STR);
			$stmt->bindParam(":clases4", $datos["clases4"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia4", $datos["asistencia4"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR NOTA TERCERO E CICLO SUPERIOR            
		=============================================*/

		static public function mdlEditarNota3cs($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, bimestre4 = :bimestre4, nota4 = :nota4, clases4 = :clases4, asistencia4 = :asistencia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre4", $datos["bimestre4"], PDO::PARAM_STR);
			$stmt->bindParam(":nota4", $datos["nota4"], PDO::PARAM_STR);
			$stmt->bindParam(":clases4", $datos["clases4"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia4", $datos["asistencia4"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR NOTA CUARTO E CICLO SUPERIOR            
		=============================================*/

		static public function mdlEditarNota4cs($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET bimestre1 = :bimestre1, nota1 = :nota1, clases1 = :clases1, asistencia1 = :asistencia1, bimestre2 = :bimestre2, nota2 = :nota2, clases2 = :clases2, asistencia2 = :asistencia2, bimestre3 = :bimestre3, nota3 = :nota3, clases3 = :clases3, asistencia3 = :asistencia3, bimestre4 = :bimestre4, nota4 = :nota4, clases4 = :clases4, asistencia4 = :asistencia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre1", $datos["bimestre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nota1", $datos["nota1"], PDO::PARAM_STR);
			$stmt->bindParam(":clases1", $datos["clases1"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia1", $datos["asistencia1"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre2", $datos["bimestre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nota2", $datos["nota2"], PDO::PARAM_STR);
			$stmt->bindParam(":clases2", $datos["clases2"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia2", $datos["asistencia2"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre3", $datos["bimestre3"], PDO::PARAM_STR);
			$stmt->bindParam(":nota3", $datos["nota3"], PDO::PARAM_STR);
			$stmt->bindParam(":clases3", $datos["clases3"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia3", $datos["asistencia3"], PDO::PARAM_INT);
			$stmt->bindParam(":bimestre4", $datos["bimestre4"], PDO::PARAM_STR);
			$stmt->bindParam(":nota4", $datos["nota4"], PDO::PARAM_STR);
			$stmt->bindParam(":clases4", $datos["clases4"], PDO::PARAM_INT);
			$stmt->bindParam(":asistencia4", $datos["asistencia4"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}
		

		/*=============================================
	    ACTUALIZAR ALUMNO            
		=============================================*/

		static public function mdlActualizarAlumno($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if ($stmt -> execute()) {
				
				return "ok";

			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}



				
	}
<?php

	class Conexion{

		public function conectar(){

			$link = new PDO("mysql:host=localhost;dbname=dbtaller","root","");

			$link -> exec("set names utf8");

			return $link;
		}

	}
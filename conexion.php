<?php
	function conectar(){
		$host = "localhost";
		$usuario = "root";
		$contraseña = "";

		$db = "datos";

		$conecta = mysqli_connect($host, $usuario, $contraseña);

		mysqli_select_db($conecta, $db);

		return $conecta;
	}
?>
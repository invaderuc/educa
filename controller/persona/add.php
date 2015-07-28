<?php
	include("../../config/config.php");
	$rut = $_POST["inputrut"];
	$nombre = $_POST["inputnombre"];
	$apellido = $_POST["inputapellido"];
	$clave = $_POST["inputclave"];
	$sexo = $_POST["inputsexo"];
	$telefono = $_POST["inputtelefono"];
	$direccion = $_POST["inputdireccion"];
	$correo = $_POST["inputcorreo"];
	$privilegios = $_POST["inputprivilegios"];

	//echo $per_ver_correo;

	//formato fecha americana
	//$nac=date("Y-m-d",strtotime($per_nac))
	$en_per_clave = md5($clave);

	// Hay campos en blanco
	if($rut == null || $clave == null || $privilegios == null|| $nombre == null || $apellido == null){
		echo "Faltan campos importantes por completar";
	}
	else{
		$query = ("INSERT INTO persona (`PER_RUT`, `PER_NOMBRE`, `PER_APELLIDO`, `PER_CLAVE`, `PER_SEXO`, `PER_TELEFONO`, `PER_DIRECCION`, `PER_CORREO`, `PER_PRIVILEGIO`) 
			VALUES ('$rut', '$nombre', '$apellido', '$en_per_clave', '$sexo', '$telefono', '$direccion', '$correo', '$privilegios')")
		;
		echo $query;
		
	  	mysqli_real_query($db,$query);
	   	header("Location: ../../view/persona/index.php");
	}
?>
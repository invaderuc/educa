<?php
	include("../../config/config.php");
	$rut = $_POST["inputrut"];
	$rut2 = $_POST["inputrut2"];
	$nombre = $_POST["inputnombre"];
	$apellido = $_POST["inputapellido"];
	$clave = $_POST["inputclave"];
	$sexo = $_POST["inputsexo"];
	$telefono = $_POST["inputtelefono"];
	$direccion = $_POST["inputdireccion"];
	$correo = $_POST["inputcorreo"];
	$privilegios = $_POST["inputprivilegios"];

	//formato fecha americana
	//$nac=date("Y-m-d",strtotime($per_nac))

	// Hay campos en blanco
	if($rut == null || $clave == null || $privilegios == null|| $nombre == null || $apellido == null){
		echo "Faltan campos importantes por completar";
	}
	else{
		$query = ("UPDATE persona SET PER_RUT='$rut', PER_NOMBRE ='$nombre',PER_APELLIDO='$apellido',PER_CLAVE='$clave',
			PER_SEXO=$sexo,PER_TELEFONO=$telefono,PER_DIRECCION='$direccion',PER_CORREO='$correo',PER_PRIVILEGIO='$privilegios' 
			WHERE PER_RUT = '$rut2'");
		echo $query;
		
	  	mysqli_real_query($db,$query);
	   	header("Location: ../../view/persona/index.php");
	}
?>
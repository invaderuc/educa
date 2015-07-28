<?php
	include("../../config/config.php");
	$rut = $_POST["inputrut"];
	$nombre = $_POST["inputnombre"];
	
	//echo $per_ver_correo;

	//formato fecha americana
	//$nac=date("Y-m-d",strtotime($per_nac))
	

	// Hay campos en blanco
	if($nombre == null ){
		echo "Faltan campos importantes por completar";
	}
	else{
		$query = ("INSERT INTO curso (`PER_RUT`, `CURSO_NOMBRE`) VALUES ('$rut', '$nombre')");
		echo $query;
	  	mysqli_real_query($db,$query);
	   	header("Location: ../../view/curso/index.php");
	}
?>
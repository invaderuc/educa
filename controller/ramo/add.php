<?php
	include("../../config/config.php");
	$id = $_POST["inputid"];
	$nombre = $_POST["inputnombre"];
	
	//echo $per_ver_correo;

	//formato fecha americana
	//$nac=date("Y-m-d",strtotime($per_nac))
	

	// Hay campos en blanco
	if($nombre == null ){
		echo "Faltan campos importantes por completar";
	}
	else{
		$query = ("INSERT INTO ramo (`RAM_NOMBRE`, `CURSO_ID`) VALUES ('$nombre','$id')");
	  	mysqli_real_query($db,$query);
	   	header("Location: ../../view/horario/add.php?id=$id");
	}
?>
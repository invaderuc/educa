<?php
	include("../../config/config.php");
	$nombre = $_POST["inputrut"];
	$autor = $_POST["inputnombre"];
	
	//echo $per_ver_correo;

	//formato fecha americana
	//$nac=date("Y-m-d",strtotime($per_nac))
	

	// Hay campos en blanco
	if($nombre == null ){
		echo "Faltan campos importantes por completar";
	}
	else{
		$query = ("INSERT INTO libro (`LIB_NOMBRE`, `LIB_AUToR`) VALUES ('$autor', '$nombre')");
		echo $query;
	  	mysqli_real_query($db,$query);
	   	header("Location: ../../view/libro/index.php");
	}
?>
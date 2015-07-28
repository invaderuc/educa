<?php
	include("../../config/config.php");
	$id = $_POST["inputid"];
	$nombre = $_POST["inputnombre"];
	
	if($nombre == null ){
		echo "Faltan campos importantes por completar";
	}
	else{
		$query = ("INSERT INTO ramo (`RAM_NOMBRE`, `CURSO_ID`) VALUES ('$nombre','$id')");
	  	mysqli_real_query($db,$query);
	  	$nuevo_id = mysqli_insert_id($db);
	   	header("Location: ../../view/ramo/view.php?id=$nuevo_id");
	}
?>
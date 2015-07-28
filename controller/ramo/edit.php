<?php
	include("../../config/config.php");
	$id = $_POST["inputid"];
	$curso = $_POST["inputcurso"];
	$nombre = $_POST["inputnombre"];
	
	$query = ("UPDATE ramo SET RAM_NOMBRE='$nombre', CURSO_ID ='$curso' WHERE RAM_ID = '$id'");
	echo $query;
  	mysqli_real_query($db,$query);
   	header("Location: ../../view/ramo/index.php");
?>
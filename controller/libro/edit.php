<?php
	include("../../config/config.php");
	$id = $_POST["inputid"];
	$rut = $_POST["inputrut"];
	$nombre = $_POST["inputnombre"];
	
	$query = ("UPDATE curso SET CURSO_NOMBRE='$nombre', PER_RUT ='$rut' WHERE CURSO_ID = '$id'");
	echo $query;
  	mysqli_real_query($db,$query);
   	header("Location: ../../view/libro/index.php");
?>
<?php
	include("../../config/config.php");
	$id = $_POST["inputid"];
	$inicio = $_POST["inputinicio"];
	$fin = $_POST["inputfin"];
	$dia = $_POST["inputdia"];
	
	$query = ("INSERT INTO horario (`RAM_ID`, `HOR_DIA`, `HOR_INICIO`, `HOR_FINAL`) VALUES ('$id','$dia','$inicio','$fin')");

  	mysqli_real_query($db,$query);
   	header("Location: ../../view/ramo/view.php?id=$id");
	
?>
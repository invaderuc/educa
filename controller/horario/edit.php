<?php
	include("../../config/config.php");
	$id = $_POST["inputid"];
	$dia = $_POST["inputdia"];
	$inicio = $_POST["inputinicio"];
	$final = $_POST["inputfinal"];
	
	$query = ("UPDATE horario SET HOR_DIA='$dia', HOR_INICIO ='$inicio', HOR_FINAL ='$final' WHERE HOR_ID = '$id'");
  	mysqli_real_query($db,$query);
   	//header("Location: ../../view/ramo/index.php");
?>
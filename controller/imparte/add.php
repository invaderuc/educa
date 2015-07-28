<?php
	include("../../config/config.php");
	$rut = $_POST["inputrut"];
	$id = $_POST["inputid"];
	

	$query = ("INSERT INTO imparte (PER_RUT,RAM_ID) VALUES ('$rut', $id)");
  	mysqli_real_query($db,$query);
   	header("Location: ../../view/ramo/view.php?id=$id");
?>
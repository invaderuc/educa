<?php
	include("../../config/config.php");
	$id = $_GET['id_ramo'];
	$id_ramo = $_GET['id_imparte'];

	$query = ("DELETE FROM imparte WHERE IMP_ID = $id_ramo ");
  	mysqli_real_query($db,$query);
   	header("Location: ../../view/ramo/view.php?id=$id");
?>
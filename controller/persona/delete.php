<?php
	$id = $_GET['id'];
	include("../../config/config.php");
	// Excluir a noticia
	$query = "DELETE FROM persona WHERE PER_RUT = '$id'";
	echo $query;
	mysqli_real_query($db,$query);

	header("Location: ../../view/persona/index.php");
?>
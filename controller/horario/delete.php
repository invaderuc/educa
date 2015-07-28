<?php
	$id = $_GET['id'];
	include("../../config/config.php");
	// Excluir a noticia
	$query = "DELETE FROM horario WHERE HOR_ID = $id";
	echo $query;
	mysqli_real_query($db,$query);

	header("Location: ../../view/ramo/index.php");
?>
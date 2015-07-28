<?php
	$id_horario = $_GET['id_horario'];
	$id_ramo = $_GET['id_ramo'];
	include("../../config/config.php");
	// Excluir a noticia
	$query = "DELETE FROM horario WHERE HOR_ID = $id_horario";
	echo $query;
	mysqli_real_query($db,$query);

	header("Location: ../../view/ramo/view.php?id=$id_ramo");
?>
<?php
	$db = mysqli_connect('localhost', 'root', '', 'educa');
	mysqli_real_query($db,"SET NAMES 'utf8'");
	ini_set('default_charset', 'UTF-8');

	function nombre_curso($id) {
		$db = mysqli_connect('localhost', 'root', '', 'educa');
		mysqli_real_query($db,"SET NAMES 'utf8'");
		ini_set('default_charset', 'UTF-8');
	   $resultado2 = $db->query("SELECT * FROM curso WHERE CURSO_ID = $id");

        while ($fila2 = $resultado2->fetch_array()) {
            $result=$fila2['CURSO_NOMBRE'];
        }
        $resultado2->close();
	   return $result;
	}
?>
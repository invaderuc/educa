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

	function apellido_persona($id) {
		$db = mysqli_connect('localhost', 'root', '', 'educa');
		mysqli_real_query($db,"SET NAMES 'utf8'");
		ini_set('default_charset', 'UTF-8');
	   $resultado2 = $db->query("SELECT * FROM persona WHERE PER_RUT = '$id'");

        while ($fila2 = $resultado2->fetch_array()) {
            $result=$fila2['PER_APELLIDO'];
        }
        $resultado2->close();
	   return $result;
	}

	function nombre_ramo($id) {
		$db = mysqli_connect('localhost', 'root', '', 'educa');
		mysqli_real_query($db,"SET NAMES 'utf8'");
		ini_set('default_charset', 'UTF-8');
	   $resultado2 = $db->query("SELECT * FROM ramo WHERE RAM_ID = '$id'");

        while ($fila2 = $resultado2->fetch_array()) {
            $result=$fila2['RAM_NOMBRE'];
        }
        $resultado2->close();
	   return $result;
	}
?>
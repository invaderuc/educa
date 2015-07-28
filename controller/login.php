<?php
	session_start();
	include("../config/config.php");
	$usurio = strtolower($_POST["inputusuario"]);
	$clave= $_POST["inputclave"];

	$aux = 1;

	function encrypt($string, $key) {
	   $result = '';
	   for($i=0; $i<strlen($string); $i++) {
	      $char = substr($string, $i, 1);
	      $keychar = substr($key, ($i % strlen($key))-1, 1);
	      $char = chr(ord($char)+ord($keychar));
	      $result.=$char;
	   }
	   return base64_encode($result);
	}

	$cadena_encriptada1 = encrypt("$clave","12");


	if($usuario!= "" && $clave!= "")
	{
		$sql = mysql_query('SELECT per_clave FROM persona WHERE PER_RUT="'.$usuario.'"');/*validamos Usuario*/
		if($f= mysql_fetch_array($sql))
		{
			if($f["per_clave"] == $cadena_encriptada1)
			{
				$aux = 0;
				$sql2 = mysql_query('SELECT usu_cargo FROM usuario WHERE USU_NOMBRE_USUARIO="'.$usuario.'"');/*seleccionamos cargo*/
				if($cargo= mysql_fetch_array($sql2))
				{
					$aux= $cargo[0];
					$_SESSION['k_tipo'] = "administrador";/*variable de seccion*/
					$_SESSION['k_nombre'] = $usuario;/*variable de seccion*/
					
					header("location: ../index.php");
				}
			}
		}
		
		if( $aux == 1)/*error la clave*/
		{
			$r1 = '<p>Error al ingresar los datos</p> <p>solo administradores del sistema pueden iniciar</p>'; 
			sleep(7);
			header("location: ../iniciar_seccion.php?r1=$r1");
		}
	}
	else/*campo nulo*/
	{
		$r1 = 'Campos Nulos'; 
		header("location: ../iniciar_seccion.php?r1=$r1");
	}
?>
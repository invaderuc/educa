<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escuela</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 60px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
</head>

<body>

	<?php
		include("../layouts/inter_bar.php");
	?>
    
    <div class="container">
    	<?php
			include("../layouts/inter_left_bar.php");
		?>
        <div class="col-sm-4 ">
            <form action="../php/prueba.php" method="post" id="form">
                <label>RUT:</label><br/>
                <input type = "text" class="form-control" name="usuario"><br/>

                <label>Nombre:</label><br/>
                <input type = "text" class="form-control" name="clave"><br/>

                <label>Apellidos:</label><br/>
                <input type = "text" class="form-control" name="nombre"><br/>

                <label>Clave:</label><br/>
                <input type = "password" class="form-control" name="paterno"><br/>

                <label>Repetir Clave:</label><br/>
                <input type = "password" class="form-control" name="materno"><br/>

                <label>Sexo:</label><br/>
                <input type = "email" class="form-control" name="correo"><br/>

                <label>Telefono:</label><br/>
                <input type = "text" class="form-control" name="nombre"><br/>

                <label>Dirección:</label><br/>
                <input type = "text" class="form-control" name="paterno"><br/>

                <label>Correo:</label><br/>
                <input type = "text" class="form-control" name="materno"><br/>

                <label>Privilegios:</label><br/>
                <input type = "email" class="form-control" name="correo"><br/>

                <input type="submit" value="Guardar" class="btn btn-default">
            </form>
        </div>
    </div>
	
	<?php
		include("../layouts/inter_footer.php");
	?>
    

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>

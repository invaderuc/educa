<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escuela</title>

    <!-- Bootstrap Core CSS -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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
        include("../../layouts/inter_bar.php");
    ?>
    
    <div class="container">
        <?php
            include("../../layouts/inter_left_bar.php");
        ?>
        <div class="col-sm-4 ">
            <form action="../../controller/persona/add.php" method="post" id="form">
                <label>RUT:</label><br/>
                <input type = "text" class="form-control" name="inputrut"><br/>

                <label>Nombre:</label><br/>
                <input type = "text" class="form-control" name="inputnombre"><br/>

                <label>Apellidos:</label><br/>
                <input type = "text" class="form-control" name="inputapellido"><br/>

                <label>Clave:</label><br/>
                <input type = "password" class="form-control" name="inputclave"><br/>

                <label>Repetir Clave:</label><br/>
                <input type = "password" class="form-control" name="inputclave2"><br/>

                <label>Sexo:</label><br/>
                <input type = "text" class="form-control" name="inputsexo"><br/>

                <label>Telefono:</label><br/>
                <input type = "text" class="form-control" name="inputtelefono"><br/>

                <label>Dirección:</label><br/>
                <input type = "text" class="form-control" name="inputdireccion"><br/>

                <label>Correo:</label><br/>
                <input type = "email" class="form-control" name="inputcorreo"><br/>

                <label>Privilegios:</label><br/>
                <input type = "text" class="form-control" name="inputprivilegios"><br/>

                <input type="submit" value="Guardar" class="btn btn-default">
            </form>
        </div>
    </div>
    
    <?php
        include("../../layouts/inter_footer.php");
    ?>
    

    <!-- jQuery Version 1.11.1 -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>

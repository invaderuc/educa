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
        <?php        
            include("../../config/config.php");
            $id = $_GET['id'];
            $consulta=("SELECT * FROM `persona` where PER_RUT = '$id'");
            if ($resultado = $db->query($consulta)) {
                /* obtener el array de objetos */
                while ($fila = $resultado->fetch_array()) {            
                        $rut=$fila['PER_RUT'];
                        $nombre=$fila['PER_NOMBRE'];
                        $apellido=$fila['PER_APELLIDO'];  
                        $sexo=$fila['PER_SEXO'];  
                        $correo=$fila['PER_CORREO'];  
                        $clave=$fila['PER_CLAVE'];  
                        $telefono=$fila['PER_TELEFONO'];
                        $direccion=$fila['PER_DIRECCION'];
                        $privilegios=$fila['PER_PRIVILEGIO'];
                        echo ("<div class=\"col-sm-4 \">
                            <form action=\"../../controller/persona/edit.php\" method=\"post\" id=\"form\">
                                <label>RUT:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$rut\" name=\"inputrut\"><br/>

                                <label>Nombre:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$nombre\" name=\"inputnombre\"><br/>

                                <label>Apellidos:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$apellido\" name=\"inputapellido\"><br/>

                                <label>Clave:</label><br/>
                                <input type = \"password\" class=\"form-control\" value=\"$clave\" name=\"inputclave\"><br/>

                                <label>Repetir Clave:</label><br/>
                                <input type = \"password\" class=\"form-control\" value=\"$clave\" name=\"inputclave2\"><br/>

                                <label>Sexo:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$sexo\" name=\"inputsexo\"><br/>

                                <label>Telefono:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$telefono\" name=\"inputtelefono\"><br/>

                                <label>Dirección:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$privilegios\" name=\"inputdireccion\"><br/>

                                <label>Correo:</label><br/>
                                <input type = \"email\" class=\"form-control\" value=\"$correo\" name=\"inputcorreo\"><br/>

                                <label>Privilegios:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$privilegios\" name=\"inputprivilegios\"><br/>

                                <input type = \"hidden\" value=\"$rut\" name=\"inputrut2\"><br/>

                                <input type=\"submit\" value=\"Guardar\" class=\"btn btn-default\">
                            </form>
                        </div>");        
                }
                /* liberar el conjunto de resultados */
                $resultado->close();
            }
            /* cerrar la conexión */
            $db->close();
        ?>
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

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
            $consulta=("SELECT * FROM `ramo` where RAM_ID = '$id'");
            if ($resultado = $db->query($consulta)) {
                /* obtener el array de objetos */
                while ($fila = $resultado->fetch_array()) {            
                        $nombre=$fila['RAM_NOMBRE'];
                        $curso=$fila['CURSO_ID'];
                        echo ("<div class=\"col-sm-4 \">
                            <form action=\"../../controller/ramo/edit.php\" method=\"post\" id=\"form\">

                                <label>Nombre:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$nombre\" name=\"inputnombre\"><br/>

                                <label>Curso:</label><br/>
                                <input type = \"text\" class=\"form-control\" value=\"$curso\" name=\"inputcurso\"><br/>

                                <input type = \"hidden\" value=\"$id\" name=\"inputid\"><br/>

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

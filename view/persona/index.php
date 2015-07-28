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
        <div class="col-sm-9">
            <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            include("../../config/config.php");

                            $consulta=("SELECT * FROM `persona`");

                            if ($resultado = $db->query($consulta)) {

                                /* obtener el array de objetos */
                                $cont=0;
                                while ($fila = $resultado->fetch_array()) {
                                        echo "<tr>";
                                        $cont=$cont+1;
                                        $rut=$fila['PER_RUT'];
                                        $nombre=$fila['PER_NOMBRE'];
                                        $apellido=$fila['PER_APELLIDO'];
                                        echo("<th>$cont</th>");
                                        echo("<th>$rut</th>");
                                        echo("<th>$nombre</th>");
                                        echo("<th>$apellido</th>");
                                        echo "<td>&nbsp;&nbsp;<a href=\"../../view/persona/view.php?id=$rut\"><span class=\"glyphicon glyphicon-file\">
                                        </span></a>&nbsp;&nbsp;<a href=\"../../view/persona/edit_persona.php?id=$rut\"><span class=\"glyphicon glyphicon-edit\">
                                        </span></a>&nbsp;&nbsp;<a href=\"../../controller/persona/delete.php?id=$rut\"><span class=\"glyphicon glyphicon-remove-circle\">
                                        </span></a></td>";
                                        echo "</tr>";
                                }
                                /* liberar el conjunto de resultados */
                                $resultado->close();
                            }
                            /* cerrar la conexión */
                            $db->close();
                        ?>                
                    </tr>
                </tbody>
            </table>
        </div></div>
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

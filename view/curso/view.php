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
            
            <div class="container">
              <h2>Información</h2>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1">Información</a></li>
                <li><a data-toggle="tab" href="#tab2">Alumnos</a></li>
                <li><a data-toggle="tab" href="#tab3">Profesores</a></li>
                <li><a data-toggle="tab" href="#tab4">Asignaturas</a></li>
                <li><a data-toggle="tab" href="#tab5">Estadisticas</a></li>
                <li><a data-toggle="tab" href="#tab6">Informe</a></li>
              </ul>

              <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                  <?php        
                        include("../../config/config.php");
                        $id = $_GET['id'];
                        $consulta=("SELECT * FROM `curso` where CURSO_ID = '$id'");
                        if ($resultado = $db->query($consulta)) {
                            /* obtener el array de objetos */
                            while ($fila = $resultado->fetch_array()) {            
                                    $rut=$fila['PER_RUT'];
                                    $nombre=$fila['CURSO_NOMBRE']; 
                                    echo ("<div class=\"col-sm-9 \">
                                        
                                            <label>RUT Profesor Jefe: $rut</label><br/>

                                            <label>Nombre: $nombre</label><br/>
                                            
                                        </div>");        
                            }
                            /* liberar el conjunto de resultados */
                            $resultado->close();
                        }
                        /* cerrar la conexión */
                        $db->close();
                    ?>
                </div>
                <div id="tab2" class="tab-pane fade">
                  <h3>Notas</h3>
                  <p>Ut enim ad minim veniam, quis nostrudñ exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="tab3" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="tab4" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="tab5" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="tab6" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>
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

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

<?php        
    /*PHP para información de la Página*/
    include("../../config/config.php");
    $id = $_GET['id'];
    $consulta=("SELECT * FROM `ramo` where RAM_ID = '$id'");
    if ($resultado = $db->query($consulta)) {
        /* obtener el array de objetos */
        while ($fila = $resultado->fetch_array()) {            
                $ramo=$fila['CURSO_ID'];
                $nombre=$fila['RAM_NOMBRE'];
                $curso=nombre_curso($ramo);  
        }
        /* liberar el conjunto de resultados */
        $resultado->close();
    }
?>

<body>
    <?php
        include("../../layouts/inter_bar.php");
    ?>
    
    <div class="container">
        <?php
            include("../../layouts/inter_left_bar.php");
        ?> 
        
        <div class="col-sm-9"> 
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1">Información</a></li>
                <li><a data-toggle="tab" href="#tab2">Profesor</a></li>
                <li><a data-toggle="tab" href="#tab3">Horario</a></li>
                <li><a data-toggle="tab" href="#tab4">Prueba</a></li>
                <li><a data-toggle="tab" href="#tab5">Unidades</a></li>
            </ul>
                
            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">  
                    <br>                
                    <label>ID: <?php echo $ramo?></label><br/>  

                    <label>Nombre: <?php echo $nombre?></label><br/>

                    <label>Curso: <?php echo $curso?></label><br/>
                </div>      
                
                <div id="tab2" class="tab-pane fade"> 
                    <div class="table-responsive">
                        <br>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Profesor</th>
                                <th>RUT</th>
                                <th>Funciones</th>
                              </tr>
                             </thead>
                            <tbody>
                                <tr>                   
                                    <?php
                                        $consulta2=("SELECT * FROM `imparte` where RAM_ID = $id");
                                        if ($resultado2 = $db->query($consulta2)) {
                                            while ($fila2 = $resultado2->fetch_array()) {  
                                                    $imparte_id=$fila2['IMP_ID']; 
                                                    $rut=$fila2['PER_RUT']; 
                                                    $profesor_nombre=apellido_persona($rut);         
                                                    echo "<tr>";
                                            echo("<th>$profesor_nombre</th>");  
                                            echo("<th>$rut</th>");                            
                                            echo "<td>&nbsp;&nbsp;<a href=\"../../controller/imparte/delete.php?id_imparte=$imparte_id&id_ramo=$id\"><span class=\"glyphicon glyphicon-remove-circle\">
                                            </span></a></td>";
                                            echo "</tr>";    
                                            } 
                                            $resultado2->close();
                                        } 
                                    ?>   
                                </tr>
                            </tbody>
                        </table>
                        <?php echo ("<a type=\"button\" href=\"../../view/imparte/add.php?id=$id\" class=\"btn btn-default\">Agregar profesor a la asignatura</a>"); ?>
                    </div>
                </div>

                <div id="tab3" class="tab-pane fade">
                    <div class="table-responsive">
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Inicio</th>
                                    <th>Final</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                   
                                    <?php
                                        $consulta3=("SELECT * FROM `horario` where RAM_ID = $id");
                                        if ($resultado3 = $db->query($consulta3)) {
                                            while ($fila3 = $resultado3->fetch_array()) {   
                                                    $inicio=$fila3['HOR_INICIO'];
                                                    $final=$fila3['HOR_FINAL'];
                                                    $dia=$fila3['HOR_DIA'];  
                                                    echo "<tr>";
                                            echo("<th>$dia</th>");
                                            echo("<th>$inicio</th>");
                                            echo("<th>$final</th>");                             
                                            </span></a></td>";
                                            echo "</tr>";    
                                            } 
                                            $resultado3->close();
                                        } 
                                    ?>   
                                </tr>
                            </tbody>
                        </table>
                        <?php echo ("<a type=\"button\" href=\"../../view/horario/add.php?id=$id\" class=\"btn btn-default\">Agregar horario a la asignatura</a>"); ?>
                    </div>  
                </div>

                <div id="tab4" class="tab-pane fade"> 
                    <div class="table-responsive">
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ramo</th>
                                    <th>Tipo</th>
                                    <th>Día</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                   
                                    <?php
                                        $consulta3=("SELECT * FROM `prueba` where RAM_ID = $id");
                                        if ($resultado3 = $db->query($consulta3)) {
                                            while ($fila3 = $resultado3->fetch_array()) {   
                                                    $id_prueba=$fila3['PRU_ID'];         
                                                    $id_ramo=$fila3['RAM_ID'];
                                                    $tipo=$fila3['PRU_TIPO'];
                                                    $dia=$fila3['PRU_DIA'];
                                                    $nombre_ramo=nombre_ramo($id_ramo);   
                                                    echo "<tr>";
                                            echo("<th>$id_prueba</th>");
                                            echo("<th>$nombre_ramo</th>");
                                            echo("<th>$tipo</th>");  
                                            echo("<th>$dia</th>");                               
                                            echo "<td>&nbsp;&nbsp;<a href=\"../../view/horario/edit_horario.php?id=$id_ramo\"><span class=\"glyphicon glyphicon-edit\">
                                            </span></a>&nbsp;&nbsp;<a href=\"../../controller/horario/delete.php?id=$id_ramo\"><span class=\"glyphicon glyphicon-remove-circle\">
                                            </span></a></td>";
                                            echo "</tr>";    
                                            } 
                                            $resultado3->close();
                                        } 
                                        $db->close();
                                    ?>   
                                </tr>
                            </tbody>
                        </table>
                        <?php echo ("<a type=\"button\" href=\"../../view/horario/add.php?id=$id\" class=\"btn btn-default\">Agregar evaluación a la asignatura</a>"); ?>
                    </div> 
                </div>

                <div id="tab5" class="tab-pane fade">  
                    <h3>Unidades a revisar en este curso</h3>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Panel heading</div>
                            <div class="panel-body">
                                <p>...</p>
                            </div>

                              <!-- List group -->
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
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

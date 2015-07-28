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
    $consulta=("SELECT * FROM `horario` where HOR_ID = '$id'");
    if ($resultado = $db->query($consulta)) {
        /* obtener el array de objetos */
        while ($fila = $resultado->fetch_array()) {   
                $id_horario=$fila['HOR_ID'];         
                $dia=$fila['HOR_DIA'];
                $inicio=$fila['HOR_INICIO'];
                $final=$fila['HOR_FINAL'];
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
        <div class="col-sm-4 ">
            <form action="../../controller/horario/edit.php" method="post" id="form">
                <label>Hora Inicio:</label><br/>
                <input type = "time" value = <?php echo $inicio ?> class="form-control" name="inputinicio"><br/>

                <label>Hora Fin:</label><br/>
                <input type = "time" value = <?php echo $final ?> class="form-control" name="inputfinal"><br/>

                <label>Día de la Semana:</label><br/>
                <select class="form-control" name="inputdia">
                  <option value ="Lunes">Lunes</option>
                  <option value ="Martes">Martes</option>
                  <option value ="Miércoles">Miercoles</option>
                  <option value ="Jueves">Jueves</option>
                  <option value ="Viernes">Viernes</option>
                  <option value ="Sabado">Sabado</option>
                  <option value ="Domingo">Domingo</option>
                </select><br>
                
                <input type = "hidden" value = <?php echo $id_horario ?> class="form-control" name="inputid"><br/>

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

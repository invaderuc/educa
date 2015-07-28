<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escuela</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

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
    include("layouts/bar.php");
  ?>
   
    <div class="container">
       <div class="col-sm-4 ">
      <form action="controller/login.php" method="post" id="form">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputEmail" class="sr-only">Usuario: </label>
        <input type="text" id="inputusuario" class="form-control" placeholder="RUT" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Clave</label>
        <input type="password" id="inputclave" class="form-control" placeholder="Clave" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      </form>
    </div>
  </div>
  <?php
    include("layouts/footer.php");
  ?>
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>

</html>

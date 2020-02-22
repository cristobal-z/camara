<?php session_start();
if (empty($_SESSION['iniciar'])) {
  $_SESSION['iniciar'] = NULL;
  // code...
}else {
  $_SESSION['iniciar'] = 1;
}
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $titulo_pagina; ?> </title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"> <img src ="images/logo.png" width ="60" >  Creaciones isabel </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link <?php if($titulo_pagina == "Inicio") {echo "active";}?>" href="index.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($titulo_pagina == "Acerca de nosotros"){echo "active";} ?>" href="acerca.php">Acerca de nosotros</a>
            </li>


              <?php if($_SESSION['iniciar'] == 1) { ?>
                <li class="nav-item">
                <div class="dropdown">
                      <label class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['usuario']; ?></label>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <a class="dropdown-item" href="includes/cerrar.php?cerrar"> Cerrar session</a>



                      </div>
                  </div>
                </li>
              <?php  } ?>


          </ul>
        </div>
      </div>
    </nav>

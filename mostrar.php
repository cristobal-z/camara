<?php
      include 'includes/conexion.php';
?>
<?php
$titulo_pagina = "Producto";
include 'includes/header.php'; ?>



<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <h1 class="my-4">Ofertas</h1>
      <div class="list-group">

            <a href="index.php" class="list-group-item <?php if($titulo_pagina == "Inicio")echo "active"; ?>">Inicio</a>

            <a href="lo.php" class="list-group-item <?php if($titulo_pagina == "Iniciar session")echo "active"; ?>">Ingresar</a>
      </div>
    </div>
    <!-- /.col-lg-3 -->
    <?php if(isset($_GET['id'])){  ?>
      <?php $ca = $_GET['id']; ?>
    <?php $sql1 = "select * from ofertas where id_ofertas= $ca";
    $resultado = $conexion-> query($sql1); ?>
    <?php while($row = $resultado -> fetch_array(MYSQLI_ASSOC)) { ?>
    <div class="col-lg-9">
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="<?php echo $row['img_ofertas']; ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?php echo $row['img1_ofertas']; ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?php echo $row['img2_ofertas']; ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>










      <div class="card mt-4">

        <div class="card-body">
          <h3 class="card-title"><?php echo $row['nom_ofertas']; ?></h3>
          <strike>  <h6><?php echo "Antes"." ".  $row['pre_ofertas']; ?></h6> </strike>
            <h4><?php echo "Ahora"." ". $row['ofer_ofertas']; ?></h4>
          <p class="card-text"><?php echo $row['des_ofertas']; ?></p>

        </div>
      </div>
      <!-- /.card -->


      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Caracteristicas
        </div>
        <div class="card-body">
          <p> <?php echo $row['car_ofertas']; ?></p>
          <small class="text-muted">Aproveche esta oferta</small>

          <hr>
          <a href="orden.php?id=<?php echo $row['id_ofertas']; ?>" class="btn btn-danger">Apartar</a>
        </div>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

    <?php } ?>
  <?php  } ?>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->


<!-- Footer -->
<?php include 'includes/footer.php'; ?>

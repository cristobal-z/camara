
<?php
$titulo_pagina = "Inicio";

require 'includes/header.php'; ?>
  <div class="container">


  </div>
  <hr>
    <!-- Page Content -->
    <div class="container">
      <div class="row">


      </div>


      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Categorias</h1>
          <?php include 'categorias.php'; ?>






        </div>
        <!-- /.col-lg-3 -->


        <div class="col-lg-9">
          <div class="col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="images/portada1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/portada2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/portada3.png" alt="Third slide">
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

          </div>




        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-9">
          <div class="row">
            <?php $sql1 = "select * from ofertas ";
            $resultado = $conexion-> query($sql1); ?>
              <?php while($row = $resultado -> fetch_array(MYSQLI_ASSOC)) { ?>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="mostrar.php?id=<?php echo $row['id_ofertas']; ?>"><img class="card-img-top" src="<?php echo $row['img_ofertas']; ?>" alt="<?php echo $row['nom_ofertas']; ?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                     <?php echo $row['nom_ofertas']; ?>
                  </h4>
                <strike>  <h6><?php echo "Antes"." ".  $row['pre_ofertas']; ?></h6> </strike>
                  <h4><?php echo "Ahora"." ". $row['ofer_ofertas']; ?></h4>
                  <p class="card-text"><?php echo $row['des_ofertas']; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"> <p> <a href="mostrar.php?id=<?php echo $row['id_ofertas']; ?>" class="btn btn-warning"> Ver más </a> </p> </small>
                </div>
              </div>
            </div>

          <?php } ?>


          </div>
          <!-- /.row -->


        </div>

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

<?php
$titulo_pagina = "Eliminar Oferta";
include 'includes/header.php';
if($_SESSION['iniciar']== NULL) {
  echo "<center> <a href='index.php'><img src ='images/404.jpg'width = '500' > </a> </center";

} else {

?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Categorias</h1>
          <?php include 'categorias.php'; ?>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <h1 class="my-4">Eliminar / Editar Ofertas</h1>

          <div class="row">

            <?php $sql1 = "select * from ofertas ";
            $resultado = $conexion-> query($sql1); ?>
              <?php while($row = $resultado -> fetch_array(MYSQLI_ASSOC)) { ?>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo $row['img_ofertas']; ?>" alt="<?php echo $row['nom_ofertas']; ?>"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"> <?php echo $row['nom_ofertas']; ?></a>
                  </h4>
                <strike>  <h6><?php echo "Antes"." ".  $row['pre_ofertas']; ?></h6> </strike>
                  <h4><?php echo "Ahora"." ". $row['ofer_ofertas']; ?></h4>
                  <p class="card-text"><?php echo $row['des_ofertas']; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"> <p> <a class="btn btn-danger" href="eliminar_o.php?id=<?php echo $row['id_ofertas']; ?>"> Eliminar</a> <a class="btn btn-primary" href="editar_o.php?id=<?php echo $row['id_ofertas']; ?>">Editar</a>  </p> </small>

                </div>
              </div>
            </div>

          <?php } ?>



        </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <?php  } ?>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

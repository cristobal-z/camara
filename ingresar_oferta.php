
<?php
$titulo_pagina = "Ingresar Oferta";
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
          <h1 class="my-4">Ingresar Oferta</h1>
          <form class="subirofer" action="includes/funciones.php" method="post" enctype="multipart/form-data" >

            <div class="form-row">

              <div class="col-md-6">
                <label>Nombre Producto</label>
                <input class="form-control" type="text" name="txtnom" required   >
              </div>

              <div class="col-md-6">
                <label>descripcion</label>
                <input class="form-control" type="text" name="txtdes" required >
              </div>

            </div>


            <div class="form-row">

              <div class="col-md-6">
                <label>Precio sin oferta</label>
                <input class="form-control" type="text" name="txtpre" required  >
              </div>

              <div class="col-md-6">
                <label>Precio de oferta</label>
                <input class="form-control" type="text" name="txtofer" required >
              </div>

            </div>

            <div class="form-group">
                  <label>Caracteristicas del Producto</label>
                  <textarea class="form-control" name="texcar" rows="7" ></textarea>

            </div>



            <div class="form-row">
              <div class="col-md-6">
                <input class="form-control-file" type="file" name="foto" accept="image/*" >

              </div>

              <div class="col">
                <input class="form-control-file" type="file" name="foto1" accept="image/*" >

              </div>

            </div>

            <hr>

            <div class="form-row">

              <div class="col">
                <input class="form-control-file" type="file" name="foto2" accept="image/*" >


              </div>

              <div class="col">
                <input class="btn btn-warning" type="submit" name="enviar" value="Aceptar">
                <hr>
              </div>


            </div>




          </form> <!–formulario–>


          <div class="row">


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

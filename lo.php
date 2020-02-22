
<?php include 'includes/funciones.php' ?>
<?php
$titulo_pagina = "Iniciar session";
include 'includes/header.php'; ?>



    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">


          <div class="list-group">



          </div>

        </div>
        <!-- /.col-lg-3 -->


        <div class="col">
            <h1 class="my-4 ml-5">Ingresar</h1> </center>
          <div class="card h-75 w-50 ml-5">
            <div class="card-body">
              <form class="subirofer" action="includes/funciones.php" method="post" enctype="multipart/form-data" >

                <div class="form-row">

                  <div class="col">
                    <label>Usuario</label>
                    <input class="form-control" type="text" name="usu" required   >
                    <hr>
                  </div>



                </div>


                <div class="form-row">

                  <div class="col">
                    <label>Contraseña</label>
                    <input class="form-control" type="password" name="pas" required  >
                    <hr>
                  </div>

                </div>

                <div class="form-row">
                  <input class="btn btn-primary" type="submit" name="ini" value="iniciar">


                </div>





              </form> <!–formulario–>

            </div>


          </div>



          <!-- /.row -->



        </div>
        <!-- /.col-lg-9 -->


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>

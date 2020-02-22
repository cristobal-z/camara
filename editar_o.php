
<?php
$titulo_pagina = "Editar";
include 'includes/header.php'; ?>
<?php if($_SESSION['iniciar'] == NULL ) {
echo "<center> <a href='index.php'><img src ='images/404.jpg'width = '500' > </a> </center";  } else {  ?>

<?php $id_e= $_GET['id']; ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Categorias</h1>
          <div class="list-group">
            <a href="ingresar_oferta.php" class="list-group-item <?php if($titulo_pagina == "Ingresar Oferta"){echo "active";} ?>">Subir Oferta</a>
            <a href="eliminar_oferta.php" class="list-group-item <?php if($titulo_pagina == "Eliminar Oferta" or $titulo_pagina == "Editar")echo "active"; ?>">ELiminar / Editar Ofertas </a>
            <a href="inicio.php" class="list-group-item <?php if($titulo_pagina == "Inicio")echo "active"; ?>">Inicio</a>

          </div>

        </div>
        <!-- /.col-lg-3 -->

        <?php $sqle = "select * from ofertas where id_ofertas = $id_e";
        $resul = $conexion ->query($sqle); ?>
        <?php while ($row = $resul-> fetch_array(MYSQLI_ASSOC)) { ?>

        <div class="col-lg-9">
          <h1 class="my-4">Editar</h1>
          <form class="subirofer" action="includes/funciones.php" method="post" enctype="multipart/form-data" >

            <div class="form-row">

              <div class="col-md-4">
                <label>id</label>
                <input class="form-control" type="text" name="txtid" readonly="readonly" value="<?php echo $row['id_ofertas']; ?>" >
              </div>

              <div class="col-md-4">
                <label>Nombre Producto</label>
                <input class="form-control" type="text" name="txtnom" required value="<?php echo $row['nom_ofertas']; ?>" >
              </div>

              <div class="col-md-4">
                <label>descripcion</label>
                <input class="form-control" type="text" name="txtdes" required value="<?php echo $row['des_ofertas']; ?>">
              </div>

            </div>


            <div class="form-row">

              <div class="col-md-6">
                <label>Precio sin oferta</label>
                <input class="form-control" type="text" required name="txtpre" value="<?php echo $row['pre_ofertas']; ?>"  >
              </div>

              <div class="col-md-6">
                <label>Precio de oferta</label>
                <input class="form-control" type="text" required name="txtofer" value="<?php echo $row['ofer_ofertas']; ?>"  >
              </div>

            </div>

            <div class="form-group">
                  <label>Caracteristicas del Producto</label>
                  <textarea class="form-control" name="texcar" required rows="7" > <?php echo $row['car_ofertas'] ?></textarea>

            </div>





            <div class="form-row">



              <div class="col">
                <input class="btn btn-warning" type="submit" name="edi" value="Actualizar">


              </div>



            </div>
            <hr>




          </form> <!–formulario–>
          <?php } ?>

          <div class="row">


          </div>

          <!-- /.row -->



        </div>
        <!-- /.col-lg-9 -->


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  <?php   }
             ?>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

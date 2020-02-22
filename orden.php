<?php
      include 'includes/conexion.php';
?>
<?php
$titulo_pagina = "Ordenar";
include 'includes/header.php'; ?>


<?php if(isset($_GET['id'])){  ?>
  <?php $ca = $_GET['id']; ?>
  <?php $sql1 = "select * from ofertas where id_ofertas= $ca";
  $resultado = $conexion-> query($sql1); ?>
  <?php while($row = $resultado -> fetch_array(MYSQLI_ASSOC)) { ?>
<!-- Page Content -->
<hr>
<hr>
<div class="container">

  <div class="row">

    <div class="col-lg-4 col-md-6 mb-4">

      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo $row['img_ofertas']; ?>" alt="<?php echo $row['nom_ofertas']; ?>"></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"> <?php echo $row['nom_ofertas']; ?></a>
          </h4>
        <strike>  <h6><?php echo "Antes"." ".  $row['pre_ofertas']; ?></h6> </strike>
          <h4><?php echo "Ahora"." ". $row['ofer_ofertas']; ?></h4>

        </div>

      </div>

    </div>
    <!-- /.col-lg-3 -->


    <div class="col-lg-8">
      <h1 class="my-4">Ingrese sus datos y nuestro personal lo contactara</h1>
      <form  action="includes/funciones.php" method="post" enctype="multipart/form-data" >

        <div class="form-row">

          <div class="col-md-4">
            <label>Nombres</label>
            <input class="form-control" type="text" name="txtnom" required   >
          </div>

          <div class="col-md-4">
            <label>Apellido Paterno </label>
            <input class="form-control" type="text" name="txtapp" required >
          </div>

          <div class="col-md-4">
            <label>Apellido Materno </label>
            <input class="form-control" type="text" name="txtapm" required >
          </div>

        </div>


        <div class="form-row">

          <div class="col-md-6">
            <label>Estado</label>
            <input class="form-control" type="text" name="txtedo" required >
          </div>

          <div class="col-md-6">
            <label>Ciudad o Municipio</label>
            <input class="form-control" type="text" name="txtciu" required  >
          </div>

        </div>

        <div class="form-row">
              <label>Telefono</label>
              <input class="form-control" type="text" name="txttel" required  >

        </div>





        <div class="form-row">
          <div class="col">
            <hr>
            <center><label>Informacion del Producto</label></center>
              <hr>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label>No.P</label>
            <input class="form-control" type="text" name="id_pro" value="<?php echo $row['id_ofertas']; ?>" readonly="readonly" >

          </div>
          <div class="col">
            <label>Nombre del producto</label>
            <input class="form-control" type="text" name="nom_pro" value="<?php echo $row['nom_ofertas']; ?>" readonly="readonly" >

          </div>

        </div>

        <div class="form-row">
          <div class="col">
            <label>Precio del producto </label>
            <input class="form-control" type="text" name="pre_pro" value="<?php echo $row['ofer_ofertas']; ?>" readonly="readonly" >

          </div>
          <div class="col">
            <label>Cantidad de productos </label>
            <input class="form-control" type="number" name="can_pro"  >


          </div>

        </div>

        <hr>
        <input type="submit"class="btn btn-primary" name="listo" value="Listo">
        <hr>
      </form> <!–formulario–>








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

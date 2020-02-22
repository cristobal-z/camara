
<?php
$titulo_pagina = "Inicio"; 
include 'includes/header.php';
if($_SESSION['iniciar']== NULL) {
  echo "<center> <a href='index.php'><img src ='images/404.jpg'width = '500' > </a> </center";

} else { ?>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Bienvenido</h1>
        <?php include 'categorias.php' ?>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">





          <?php $sql1 = "select id_ventas,nom_cli,app_cli,ciu_cli,tel_cli,id_pro,nom_pro,ifnull(can_pro,1) can_pro,ifnull(estado,'pendiente') estado FROM ventas where estado  IS NULL";
          $resultado = $conexion-> query($sql1); ?>
          <h1 class="my-4">Pedidos</h1>
          <table class="table table-hover">
           <tr>
             <th> Nombre</th>
             <th>Apellido P.</th>
             <th>Ciudad</th>
             <th>Telefono</th>
             <th>Folio</th>
             <th>Producto</th>
             <th>Cantidad</th>
             <th>Estado</th>

           </tr>

      <?php while($row = $resultado -> fetch_array(MYSQLI_ASSOC)) { ?>

         <tr>
           <td> <?php echo $row['nom_cli']; ?> </td>
           <td> <?php echo $row['app_cli']; ?> </td>
           <td> <?php echo $row['ciu_cli']; ?> </td>
           <td> <?php echo $row['tel_cli']; ?> </td>
           <td> <?php echo $row['id_pro']; ?> </td>
           <td> <?php echo $row['nom_pro']; ?> </td>
           <td> <?php echo $row['can_pro']; ?> </td>
           <td> <?php echo $row['estado']; ?> </td>
           <td> <a class="btn btn-danger" href="includes/funciones.php?id=<?php echo $row['id_ventas'];?>"> Listo </a></td>
         </tr>






        <?php } ?>
        </table>


        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


<?php  } ?>

<?php include 'includes/footer.php'; ?>

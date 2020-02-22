
<?php include 'includes/header.php'; ?>
<?php if($_SESSION['iniciar']== NULL) {
  echo "<center> <a href='index.php'><img src ='images/404.jpg'width = '500' > </a> </center";

} else { ?>
<div class="container">
  <div class="row">
    <div class="col-lg-3">


    </div>

    <div class="col-lg-5">
      <h2  center class="my-4">Crear otro administrador </h2>


        <form class="" action="includes/funciones.php" method="post">
          <div class="card my-4">
          <h5 class="card-header">Nuevo correo</h5>
          <div class="card-body">
            <div class="form-group">
              <input type="text" class="form-control" name="usu_cor" required placeholder="Correo">

            </div>
            <div class="form-group">

              <input type="password" class="form-control" name="con_pas" required placeholder="Contraseña">

            </div>
            <div class="form-group">

              <input type="password" class="form-control" name="conf_pas" required placeholder="Confirmar Contraseña">

            </div>
            <div class="form-group">

              <input type="text" class="form-control" name="nom" required placeholder="Apodo">

            </div>

            <span class="text-muted">
                <input type="submit"class="btn btn-danger" name="nuevo" value="Listo">

            </span>
          </div>
        </div>

      </form>
    </div>

  </div>

</div>








<?php
 }
include 'includes/footer.php'; ?>

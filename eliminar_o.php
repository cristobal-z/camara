


<?php include 'includes/conexion.php'; ?>
<?php $titulo_pagina = "Eliminar Oferta";
include 'includes/header.php';
if($_SESSION['iniciar']== NULL) {
  echo "<center> <a href='index.php'><img src ='images/404.jpg'width = '500' > </a> </center";

} else {

?>

<?php

if (isset($_GET['id'])) {
  $id_o =$_GET['id'];
  $c;

  $i = "select img_ofertas,img1_ofertas,img2_ofertas from ofertas where id_ofertas ='".$id_o."'";
  $resultado = $conexion-> query($i);
  while($row= $resultado ->fetch_array(MYSQLI_ASSOC)){
    $eli = $row['img_ofertas'];
    $eli1 = $row['img1_ofertas'];
    $eli2 = $row['img2_ofertas'];
  }

$sql = "delete from ofertas where id_ofertas= '".$id_o."'";
$c = $conexion->query($sql);
  if (!$c){
      echo "La consulta SQL contiene errores.";
      exit();
  }else {

    if (!unlink($eli)) {
      echo "error";


    }
    else {
      if (!unlink($eli1)) {
        echo "error";


      }else {
        if (!unlink($eli2)) {
          echo "error";


        }
      }


    }


    echo "<script> alert('listo');</script>";
    echo "<script type'text/javascript'>window.location='eliminar_oferta.php' </script>";

  }



}else {
  echo "<h1>Error 404 Pagina no encontrada</h1>";
}

  }?>


 <?php include 'includes/footer.php'; ?>

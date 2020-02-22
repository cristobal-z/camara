<?php
if (isset($_GET['cerrar'])) {
  session_start();

  session_destroy();
  header('Location:../index.php');

} else {
  echo "pagina no econtrada";
}



 ?>

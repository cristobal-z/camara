<?php

include 'conexion.php';


if (isset($_POST['enviar'])) { 
  $carpeta = "/var/www/html/camara/images/";
  $destino = $carpeta.$_FILES['foto']['name'];
  $destino1 = $carpeta.$_FILES['foto1']['name'];
  $destino2 = $carpeta.$_FILES['foto2']['name'];

  $urlf = "images/".$_FILES['foto']['name'];
  $urlf1 = "images/".$_FILES['foto1']['name'];
  $urlf2 = "images/".$_FILES['foto2']['name'];


  $nom = $_POST['txtnom'];
  $des = $_POST['txtdes'];
  $pre = $_POST['txtpre'];
  $ofe = $_POST['txtofer'];
  $car = $_POST['texcar'];
  $url = $urlf;

  if ($_FILES['foto']['error'] >0 ) {
    echo "<script> alert('No se pudo guardar error de foto');</script>";

  }
  else {
    $permitidos = array("image/png","image/jpeg","image/jpg");
    if (in_array($_FILES['foto']['type'],$permitidos)) {

      $sql ="insert into ofertas (nom_ofertas,des_ofertas,img_ofertas,img1_ofertas,img2_ofertas,pre_ofertas,ofer_ofertas,car_ofertas)
      values('$nom','$des','$urlf','$urlf1','$urlf2','$pre','$ofe','$car')";

      $res = $conexion -> query($sql)OR die('Error al insertar los datos'.mysqli_error($conexion));
      if ($res) {
        move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
        move_uploaded_file($_FILES['foto1']['tmp_name'],$destino1);
        move_uploaded_file($_FILES['foto2']['tmp_name'],$destino2);

        echo "<script> alert('Se inserto correctamente');</script>";
        echo "<script type'text/javascript'>window.location='../ingresar_oferta.php' </script>";

      }
      else {
        echo "<script> alert('No se pudo guardar');</script>";
      }

    }else {
    echo "<script> alert('No se pudo guardar tipo de image no permitida');</script>";

    }




  }


}

function cargar(){

    $sql1 = "select * from ofertas ";
    $resultado = $conexion-> query($sql1);
    while ($row = $resultado -> fetch_array(MYSQLI_ASSOC)) {
      $row['id_ofertas'];
      $row['nom_ofertas'];
      $row['des_ofertas'];
      $row['img_ofertas'];
      $row['pre_ofertas'];
      $row['ofer_ofertas'];
      $row['car_ofertas'];

    }
}


if (isset($_POST['edi'])) {
  $id = $_POST['txtid'];
  $nom = $_POST['txtnom'];
  $des = $_POST['txtdes'];
  $pre = $_POST['txtpre'];
  $ofe = $_POST['txtofer'];
  $car = $_POST['texcar'];

  $sql = "update ofertas set nom_ofertas='$nom',des_ofertas='$des',pre_ofertas='$pre',ofer_ofertas='$ofe',car_ofertas='$car' where id_ofertas ='$id'";
  $cs = $conexion->query($sql);
		if (!$cs){
   			echo "La consulta SQL contiene errores.".mysqli_error();
  			 exit();
			}else {

				header('Location:../eliminar_oferta.php');


			}


 }

 if (isset($_POST['listo'])) {

   $array = array($_POST['txtnom'],
                  $_POST['txtapp'],
                  $_POST['txtapm'],
                  $_POST['txtedo'],
                  $_POST['txtciu'],
                  $_POST['txttel'],
                  $_POST['id_pro'],
                  $_POST['nom_pro'], 
                  $_POST['pre_pro'],
                  $_POST['can_pro']
                  );
    $sqle ="insert into ventas (nom_cli,app_cli,apm_cli,edo_cli,ciu_cli,tel_cli,id_pro,nom_pro,pre_pro,can_pro)
    values('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]','$array[5]','$array[6]','$array[7]','$array[8]','$array[9]')";
   $res = $conexion -> query($sqle);
   if ($res) {
       echo "<script> alert('Se inserto correctamente');</script>";
       echo "<script type'text/javascript'>window.location='../index.php' </script>";

   }
   else {
        echo "<script> alert('No se pudo guardar');</script>";
   }

  }

  if (isset($_POST['ini'])) {

$usu = $_POST['usu'];
$pas = $_POST['pas'];

$s = "select * from usuarios where usu ='$usu' and contra = '$pas' ";
$encontrado = $conexion->query($s);
$row = mysqli_fetch_assoc($encontrado);

if($row['usu']== $usu and $row['contra'] == $pas) {
  session_start();
  $_SESSION['iniciar'] = 1;
  $_SESSION['usuario'] = $row['nom'];

  echo "<script type'text/javascript'>window.location='../inicio.php' </script>";

}
else {
  echo "<script type'text/javascript'>window.location='../lo.php' </script>";
}


 }

 if (isset($_GET['id'])) {
   $iv= $_GET['id'];
   $sql = "update ventas set estado='listo'  where id_ventas =$iv";
   $consulta = $conexion->query($sql);
   if (!$consulta) {
     echo "<script> alert('error');</script>";
     // code...
   }else {
     echo "<script> alert('listo');</script>";
     echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
   }

 }

 if (isset($_POST['nuevo'])) {

  $correo = $_POST['usu_cor'];
  $pas= $_POST['con_pas'];
  $pas2 = $_POST['conf_pas'];
  $nombre = $_POST['nom'];
  if ($pas == $pas2) {
    $sq="SELECT * from usuarios where cor_usu = '$correo'";
      $encontrado = $conexion->query($sq);
        $row = mysqli_fetch_assoc($encontrado);

        if ($row['cor_usu'] == $correo) {
          echo "<script> alert('El correo ".$correo." ya existe');</script>";

        }else {

          $sql= "INSERT INTO usuarios (usu,contra,nom) VALUES('$correo','$pas','$nombre')";
          $res = $conexion->query($sql) OR die('Error al insertar los datos' . mysqli_error($conexion));
          if($res){
            echo "<script> alert('Usuario registrado con exito');</script>";
            echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
          }

        }



  }
  else {
    echo "<script> alert('No coiciden las contraseñas');</script>";
  }

}





 ?>

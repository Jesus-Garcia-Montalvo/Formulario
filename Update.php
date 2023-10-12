<?php 

include("cnx.php");

$id = $_POST['id'] ;
$nom = $_POST['nombre'] ;
$usu = $_POST['usuario'] ;
$cont = $_POST['contraseña'] ;

$actualizar = "UPDATE tabla_form SET nombre='$nom',  usuario='$usu', contraseña='$cont' WHERE id='$id'";

 $resultado = mysqli_query($con,$actualizar);

 if ($resultado) {
 	echo "<script>
        location.href = 'edit.php';
        </script>";


 }else{
 	echo "<script>alert('No Se Han Podido Actualizar Los Datos');</script>";
 }



 ?>
<?php
include("cnx.php");

$id_usuario =$_GET['id'];


 $sql = "DELETE FROM tabla_form WHERE id= '$id_usuario'";

$rta = mysqli_query($con,$sql);
if ($rta) {
	header("location:edit.php");
}
else {
	header("location:edit.php");
}



 ?>
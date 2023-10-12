<?php
include("cnx.php");

$id = $_GET["id"];

$consulta = "SELECT * FROM tabla_form WHERE id ='$id'";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <link rel="stylesheet" type="text/css" href="./styles/est2.css">
    <link rel="stylesheet" href="./styles/boton.css">
</head>

<body>
    <div class="formulario">

        <div class="d1">
            <img src="icono.png" height="100px" width="100px"><br>
            <h2>UPDATE</h2><br><br><br><br>
        </div>

        <div class="d2">
            <h2><center>ACTUALIZAR REGISTRO</center></h2>
            <div class="user">
                <form class="contenedor-tablas" action="Update.php" method="post">

                    <?php
                    $resultado = mysqli_query($con, $consulta);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                    ?>

                        <label for="">🪪ID</label>
                        <input type="text" class="item" value="<?php echo $row["id"]; ?>" name="id"><br><br>
                        <label for="">👤 Nombre y Apellido:</label>
                        <input type="text" class="item" value="<?php echo $row["nombre"]; ?>" name="nombre"><br><br>
                        <label>👨‍💻Nombre de Usuario:</label>
                        <input type="text" class="item" value="<?php echo $row["usuario"]; ?>" name="usuario"><br><br>
                        <label>🔑 Contraseña:</label>
                        <input type="text" class="item" value="<?php echo $row["contraseña"]; ?>" name="contraseña"><br><br>

                    <?php
                    }
                    ?>

                    <input type="submit" value="Editar" class="submit">

                </form>
            </div>
        </div>
    </div>
</body>

</html>


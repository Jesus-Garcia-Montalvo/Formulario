<?php
include("cnx.php");
$consulta = "SELECT * FROM tabla_form"
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDIT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="./styles/est.css">
  
  
</head>

<body>
  <div class="formulario">
    <div class="d1">
      <img src="img/icono.png" height="100px" width="100px"><br>
      <h2> EDIT</h2><br><br><br><br>
    </div>
    <div class="d2">
      <h2><center>EDITAR REGISTROS</center></h2>
      <div class="user">
        <div class="contenedor-tablas">
          <table class="table">
            <thead>
              <tr>
                <th><div class="header">ID</div></th>
                <th><div class="header">NOMBRE</div></th>
                <th><div class="header">USUARIO</div></th>
                <th><div class="header">CONTRASEÑA</div></th>
                <th><div class="header">OPCION</div></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $resultado = mysqli_query($con, $consulta);
              while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                  <td>
                    <div class="item"><?php echo $row["id"]; ?></div>
                  </td>
                  <td>
                    <div class="item"><?php echo $row["nombre"]; ?></div>
                  </td>
                  <td>
                    <div class="item"><?php echo $row["usuario"]; ?></div>
                  </td>
                  <td>
                    <div class="item"><?php echo $row["contraseña"]; ?></div>
                  </td>
                  <td>
                    <div class="item_link">
                      <a href="actualizar.php?id=<?php echo $row["id"]; ?>" class="link" style="text-decoration:none; color:#4091ec;">Editar</a>
                      <a href="remove.php?id=<?php echo $row["id"]; ?>" class="link" style="text-decoration:none; color:#4091ec;">Eliminar</a>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <form action="create.php">
          <input type="submit" value="Nuevo">
        </form>
      </div>
    </div>
  </div>
</body>

</html>

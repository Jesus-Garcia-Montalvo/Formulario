<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user = "root";
  $pass = "";
  $host = "localhost";
  $db_name = "form";

  // Conectamos a la base de datos
  $connection = mysqli_connect($host, $user, $pass, $db_name);

  // Verificamos la conexión a la base de datos
  if (!$connection) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
  }

  // Escapamos las entradas del formulario para evitar inyección SQL
  $nombre = mysqli_real_escape_string($connection, $_POST["nombre"]);
  $usuario = mysqli_real_escape_string($connection, $_POST["usuario"]);
  $contraseña = mysqli_real_escape_string($connection, $_POST["contraseña"]);

  // Consulta SQL con sentencia preparada para evitar inyección SQL
  $consulta = "SELECT * FROM tabla_form WHERE nombre = '$nombre' AND usuario = '$usuario' AND contraseña = '$contraseña'";
  $resultado = mysqli_query($connection, $consulta);

  // Verificamos si se encontraron resultados
  if (mysqli_num_rows($resultado) > 0) {
    echo "<script>
        location.href = 'inicio.html';
        </script>";
    // Aquí podrías redireccionar a una página de bienvenida para el usuario
  } else {
       echo "<script>
        location.href = 'index.php';
        </script>";
    // Aquí podrías redireccionar a una página de inicio de sesión nuevamente o mostrar un mensaje de error.
  }

  // Cerramos la conexión a la base de datos
  mysqli_close($connection);
}


?>





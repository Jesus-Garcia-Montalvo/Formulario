<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIAR SESIÓN</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="./styles/est.css">
</head>
<body>
    <div class="formulario">

        <div class="d1">
            <img src="img/icono.png" height="100px" width="100px"> <br>
            <h2>LOGIN</h2><br><br><br><br>
        </div>

        <div class="d2">
            <h2><center>Iniciar sesión</center></h2>

            <div class="user">

                <form action="validar.php" name="" method="POST">

                    <table border="0" align="center" class="table">
                        <tr>
                            <td>
                                <p>👤 Nombre y Apellido:</p>
                            </td>
                            <td>
                                <label for="name"></label>
                                <input type="text" name="nombre" id="name" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>👨‍💻 Nombre de Usuario:</p>
                            </td>
                            <td>
                                <label for="user"></label>
                                <input type="text" name="usuario" id="user" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>🔑 Contraseña:</p>
                            </td>
                            <td>
                                <input type="password" name="contraseña" id="password" required />
                            </td>
                        </tr>
                    </table>

                    <div class="contenedor-botones">
                        <input type="submit" name="enviar" id="enviar" value="Entrar" /><br>
                    </div>
                </form>

                <form action="create.php">
                    <input type="submit" value="Registrarse" />
                </form>

            </div>
        </div>

    </div>
</body>
</html>

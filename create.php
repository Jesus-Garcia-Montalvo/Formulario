<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CREATE</title>
    <link rel="stylesheet" type="text/css" href="est.css">
</head>
<body>
    <div class="formulario">
        <div class="d1">
            <img src="icono.png" height="100px" width="100px"><br>
            <h2>CREATE</h2><br><br><br><br>
        </div>
        <div class="d2">
            <form action="registro.php" name="" method="POST" class="datos">
                <h2><center>AGREGAR NUEVO REGISTRO</center></h2>
                <div class="user">
                    <label>👤 Nombre y Apellido</label>
                    <input type="text" name="nombre" id="name" required /><br>
                    <label>👨‍💻 Nombre de Usuario</label>
                    <input type="text" name="usuario" id="user" required /><br>
                    <label>🔑 Contraseña</label>
                    <input type="password" name="contraseña" id="password" required /><br>
                    <label>🔐 Verificar Contraseña</label>
                    <input type="password" name="ver-contraseña" id="password" required /><br>
                    <a href="index.php"><input  type="submit" name="enviar" id="enviar" value="Guardar"/></a>
                    <a href="edit.php"><input type="botton" value="Mostrar Registros"></a>
                    <a href="index.php"><input type="botton" value="Volver Inicio"></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

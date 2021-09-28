<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba loging</title>
</head>
    <h1>INGRESE PORFA</h1>
<body>
    <form action='<?php echo Conectar::ruta();?>c-auth/' method="POST">
        <label for="correoUsu">Correo:</label>
        <input type="email" name="correoUsu" required>
        <label for="claveUsu">Clave:</label>
        <input type="text" name="claveUsu" required>
        <button Type="submit">LOGIN</button>
    </form>
    
</body>
</html>
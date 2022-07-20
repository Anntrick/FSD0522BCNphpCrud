<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
    <form action="insertUser.php" method="post">
        Nombre: <input type="text" name="name"></br>
        Contraseña: <input type="password" name="password"></br>
        Email: <input type="text" name="email">
        </br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
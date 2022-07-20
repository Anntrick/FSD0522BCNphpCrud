<?php
    require_once 'conecction.php';

    if(isset($_POST['email'])){
        $query = "update usuarios set email = '" . $_POST['email'] . "', name = '" . $_POST['name'] . "', password = '" . $_POST['password'] . "' where email='" . $_POST['emailRef'] . "';";
        $connection->exec($query);
        echo "Usuario actualizado";
    } else {
?>
        <form action="updateUser.php" method="post">
            <input type="hidden" name="emailRef" value="<?php echo $_GET['email']?>">
            Nombre: <input type="text" name="name" value="<?php echo $_GET['name'] ?>"></br>
            Contraseña: <input type="password" name="password"  value="<?php echo $_GET['password'] ?>"></br>
            Email: <input type="text" name="email" value="<?php echo $_GET['email'] ?>">
            </br>
            <input type="submit" value="Enviar">
        </form>
<?php
    }    
?>
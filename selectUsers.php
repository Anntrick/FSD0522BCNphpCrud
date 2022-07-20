<?php
    require_once 'conecction.php';

    $sql = "SELECT * FROM usuarios";
    $result = $connection->prepare($sql);
    $result->execute();
    $tasks = $result->fetchAll();

    foreach($tasks as $user) {
        echo "</br>Email: " . $user['email'];
        echo "</br>Name: " . $user['name'];
        echo "</br>Password: " . $user['password'];
        echo "</br><a href='updateUser.php?email=" . $user['email'] . "&name=" . $user['name'] . "&password=" . $user['password'] . "'>Modificar</a>";
        echo "</br><a href='deleteUser.php?email=" . $user['email'] . "'>Borrar</a>";
    }

?>
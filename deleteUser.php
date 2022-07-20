<?php 
    require_once "conecction.php";

    try{
        $sql = "DELETE FROM usuarios WHERE email = '" . $_GET['email'] . "'";
        $connection->exec($sql);
        echo "Usuario eliminado";
    } catch(Exception $e) {
        echo $e;
    }
?>
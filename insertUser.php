<?php
    require_once 'conecction.php';

    if(isset($_POST)){

        try {
            $query = "insert into usuarios (email, name, password) values ('" . $_POST["email"] . "', '" . $_POST["name"] . "', '" . $_POST["password"] . "');";
            $connection->exec($query);
            echo "Usuario " . $_POST['name'] . " insertado";
        } catch (Exception $e){
            echo $e;
        }
    }

    
     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    
    <?php
        $arrayPlatos = [
            "platos" => [
                "Ensalada" => [
                    "titulo" => "Ensalada con queso de cabra y manzana verde"
                ],
                "Fricando" => [
                    "titulo" => "Fricando de Ternera"
                ],
                "Flan" => [
                    "titulo" => "Flan de huevo con nata"
                ],
            ]
        ];

        foreach($arrayPlatos['platos'] as $key => $plato){
            echo "<a href='detalle.php?id=$key' >".$plato['titulo']."</a></br>";
        }
    
    ?>


</body>
</html>
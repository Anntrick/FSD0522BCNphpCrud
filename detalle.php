<?php


    
$arrayPlatos = [
    "platos" => [
        "Ensalada" => [
            "titulo" => "Ensalada con queso de cabra y manzana verde",
            "comensales" => 2,
            "tipo" => "Entrante",
            "precio" => 4
        ],
        "Fricando" => [
            "titulo" => "Fricando de Ternera",
            "comensales" => 3,
            "tipo" => "Segundo",
            "precio" => 4
        ],
        "Flan" => [
            "titulo" => "Flan de huevo con nata",
            "comensales" => 1,
            "tipo" => "Postre",
            "precio" => 2
        ],
    ]
];

echo "Título: ".$arrayPlatos['platos'][$_GET['id']]['titulo'] . "</br>";
echo "Comensales: ".$arrayPlatos['platos'][$_GET['id']]['comensales'] . "</br>";
echo "Tipo: ". $arrayPlatos['platos'][$_GET['id']]['tipo'] . "</br>";
echo "Precio: ". $arrayPlatos['platos'][$_GET['id']]['precio'] . "</br>";


?>
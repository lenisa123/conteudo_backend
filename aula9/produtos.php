<?php

$produto1=[
    "nome" => "Câmera",
    "marca" => "LG",
    "preco" => 2500
];

$produto2=[
    "nome" => "notebook",
    "marca" => "dell",
    "preco" => 7500
];

$produto3=[
    "nome" => "Smartphone",
    "marca" => "Sansung",
    "preco" => 3500
];

$produtos=[
        $produto1, 
        $produto2,
        $produto3
];

echo json_encode($produtos);
?>
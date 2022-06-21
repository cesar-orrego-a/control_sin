<?php

$products = array(
    "DEDS" => array(
        "name" => "Destornillador plano 7mm",
        "description" => "Destornillador plano 7mm, mango de goma, punta imantada.",
        "price" => "15.6"
    ),
    "DEXT" => array(
        "name" => "Destornillador estrella 7mm",
        "description" => "Destornillador estrella 7mm, mango de goma, punta imantada.",
        "price" => "14.5"
    ),
    "DATS" => array(
        "name" => "Dado de ajuste continuo, pequeño",
        "description" => "Dado de ajuste T, continuo, pequeño",
        "price" => "18.0"
    ),
    "HAMM" => array(
        "name" => "Martillo mango de madera, 10 inch",
        "description" => "Martillo mango de madera de 10 pulgadas",
        "price" => "40.5"
    ),
    "TRNO" => array(
        "name" => "Torno cabezal universal",
        "description" => "Torno de cabezal universal",
        "price" => "27.9"
    )
);

foreach ($products as $key => $value) {
  echo "key: ".$key;
  echo "<br>";
  echo "name: ".$value["name"];
  echo "<br>";
  echo "description: ".$value["description"];
  echo "<br>";
  echo "price: ".$value["price"];
  echo "<hr>";
}

 ?>

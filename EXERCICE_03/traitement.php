<?php

try {
    $instance = new PDO("mysql:host=localhost;dbname=carsdb", "root", "", array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ));
} catch (Exception $e) {
    die($e->getMessage());
}
$credentials = array(
    "brand" => $_POST['brand'],
    "model" => $_POST['model'],
    "year" => $_POST['year'],
    "color" => $_POST['color'],
);
$add = $instance->prepare("INSERT INTO car (brand, model, year, color) VALUES (:brand, :model, :year, :color)");
$add->execute(array(
    'brand' => $credentials['brand'],
    'model' => $credentials['model'],
    'year' => $credentials['year'],
    'color' => $credentials['color'],
));
header('Content-Type: application/json');
echo json_encode(array("success" => true));



<?php

require "./vendor/autoload.php";

$client = new MongoDB\Client();

$column = $_POST['column'];
$value = $_POST['value'];

$data = [];
$i = 0;
foreach ($column as $col) {
    $data[$col] = $value[$i];
    $i++;
}

$db = $client->selectDatabase("local");
$sukoCollection = $db->selectCollection("suko-collection");

if ($sukoCollection->insertOne($data)) {
    header("location: index.php?saved=true");
}



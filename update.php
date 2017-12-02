<?php

require "./vendor/autoload.php";

$client = new MongoDB\Client();

$id = $_POST['id'];
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

$updated = $sukoCollection->updateOne(["_id" => new MongoDB\BSON\ObjectId($id)], ['$set' => $data]);

if ($updated) {
    header("location: index.php?updated=true");
}



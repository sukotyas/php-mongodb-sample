<?php

require "./vendor/autoload.php";

$client = new MongoDB\Client();

$id = $_GET['id'];

$db = $client->selectDatabase("local");
$sukoCollection = $db->selectCollection("suko-collection");

$updated = $sukoCollection->deleteOne(["_id" => new MongoDB\BSON\ObjectId($id)]);

if ($updated) {
    header("location: index.php?deleted=true");
}



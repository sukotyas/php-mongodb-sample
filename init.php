<?php
require "./vendor/autoload.php";

$client = new MongoDB\Client();
$db = $client->selectDatabase("local");
$db->createCollection("suko-collection");

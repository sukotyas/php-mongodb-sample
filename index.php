<?php
require "./vendor/autoload.php";

$client = new MongoDB\Client();
$db = $client->selectDatabase("local");
//$db->createCollection("suko-collection");

$sukoCollection = $db->selectCollection("suko-collection");
$results = $sukoCollection->find([]);
?>
<!doctype html>
<html>
    <head>
        <title>List of Records</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        List of Records
                        <div class="pull-right">
                            <a href="add.php" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                        </div>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php
                    foreach ($results as $key => $value) {
                        echo "<div style='border: 1px solid black; padding: 10px; margin-bottom: 10px;'>";
                        foreach ($value as $nKey => $nValue) {
                            if ($nKey == "_id") {
                                echo "<div class='pull-right'>";
                                echo "<a href='edit.php?id=" . $nValue . "' class='btn btn-success'><i class='fa fa-pencil'></i></a> ";
                                echo "<a href='delete.php?id=" . $nValue . "' class='btn btn-danger' onclick='confirm(\"Are you sure you want to delete this data?\")'><i class='fa fa-trash'></i></a>";
                                echo "</div>";
                            } else {
                                echo "<strong>" . $nKey . "</strong>: " . $nValue . "<br>";
                            }
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

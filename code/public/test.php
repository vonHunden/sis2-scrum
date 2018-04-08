<?php

echo "Hola Mundo desde php";
echo "<br>";

$db = null;
print_r(PDO::getAvailableDrivers());

/*try {
    $db = new PDO("mysql:host=db;dbname=example", "root", "root");
    echo "SUCCESSFUL";
} catch (PDOException $e) {
    die("ERROR: {$e->getMessage()}");
}*/

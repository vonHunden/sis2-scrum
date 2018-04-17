<?php

$db = null;
$dns = "mysql:host=sql9.freesqldatabase.com:3306;dbname=sql9232329";
$user = "sql9232329";
$pass = '2yslepRk2g';
$data = array();
try {
$db = new PDO($dns, $user, $pass);
$statement = $db->query("SELECT IdAula, asientos, size FROM aula");
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
die('hubo un error');
}
if (isset($_POST) && !empty($_POST)) {
$aula= $_POST['IdAula'];
$asientos = $_POST['asientos'];
$size = $_POST['size'];
$vars = array($aula, $asientos,$size);
//print_r($vars);
$sql = "INSERT INTO aula(IdAula, asientos, size) VALUES (?,?, ?)";
$db->prepare($sql)->execute($vars);
header("Location: http://localhost/aulas/listardatos.php");
die();
}
?>
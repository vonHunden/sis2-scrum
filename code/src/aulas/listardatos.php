<?php
$db = null;
$dns = "mysql:host=localhost;dbname=sis2-scrum";
$user = "root";
$pass = '';
$data = array();
try {
$db = new PDO($dns, $user, $pass);
$statement = $db->query("SELECT IdAula, asientos, size FROM aula");
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
die('hubo errores wey');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>sis2</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (count($data) != 0) : ?>
<table>
<thead>
<tr>
<th>NOMBRE DE AULA</th>
<th>NUMERO DE ASIENTOS</th>
</tr>
</thead>
<tbody>
<?php foreach($data as $item): ?>
<tr>
<td><?php echo $item['IdAula']; ?></td>
<td><?php echo $item['asientos']; ?></td>
<td><?php echo $item['size']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else : ?>
<div>NO DATA</div>
<?php endif; ?>
</body>
</html>
<?php
require('listardatos.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>CREA AULA</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wra">
<form class="mform" action="controlador.php" method="post">
Nombre de aula : <br>
<input class="min" type="text" name="IdAula" value=""><br>
Numero  de asientos: <br>
<input class="min" type="text" name="asientos" value=""><br>
Tamaño o  tipo:<br>
<input class="min" type="text" name="size" value=""><br>
<input class="min" type="submit" value="CREAR">
</form>
</div>
<div class="wra">
<a href="listardatos.php">Listar</a>
</div>
</body>
</html>
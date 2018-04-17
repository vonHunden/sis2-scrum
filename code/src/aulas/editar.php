<?php
require('listardatos.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>EDITAR AULA</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wra">
<form class="mform" action="editfun.php" method="post">
Nombre de aula : <br>
<input class="min" type="text" name="IdAula" value=""><br>
Numero  de asientos: <br>
<input class="min" type="text" name="asientos" value=""><br>
Tamaño o  tipo:<br>
<input class="min" type="text" name="size" value=""><br>
<input class="min" type="submit" value="EDITAR">
</form>
</div>
<div class="wra">
</div>
</body>
</html>
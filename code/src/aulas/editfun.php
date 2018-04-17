
<?php

//$db = null;
//$dns = "sql9.freesqldatabase.com:3306";
//$user = "sql9232329";
//$pass = '2yslepRk2g';
//$data = array();
//$con = mysql_connect($dns, $user, $pass) or die('unable to connect');

//mysql_select_db(dsql9232329,$db);
	define('HOST','sql9.freesqldatabase.com:3306');
	define('USER','sql9232329');
	define('PASS','2yslepRk2g');
	define('DB','sql9232329');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
//try {

//$db = new PDO($dns, $user, $pass);
//$statement = $db->query("SELECT IdAula, asientos, size FROM aula");
//$data = $statement->fetchAll(PDO::FETCH_ASSOC);
//} catch (PDOException $e) {
//die('hubo un error');
//}
//if (isset($_POST) && !empty($_POST)) {
$aula= $_POST['IdAula'];
$asientos = $_POST['asientos'];
$size = $_POST['size'];
//$vars = array($aula, $asientos,$size);
//print_r($vars);
$sql = "UPDATE aula SET IdAula='$aula', asientos='$asientos', size='$size' WHERE IdAula='$aula'";
//$db->prepare($sql)->execute($vars);
//$db->mysql_query($sql);
$result=mysqli_query($con,$sql);
if(!$result){ echo "No se ha podido Modificar";}
header("Location: http://localhost/aulas/listardatos.php");
die();

//}
?>
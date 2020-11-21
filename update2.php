<?php

require_once 'connect.php';
//$connect = mysqli_connect('localhost','root','root','lab4');

$fridge_id = $_POST['fridge_id'];
$mark=$_POST['mark'];
$model=$_POST['model'];


switch ($_POST['type_defrosting']) {
	case 1:
		$type_defrosting="Автоматическая";
		break;

	case 2:
	$type_defrosting="Капельная";
	break;

	case 3:
	$type_defrosting="No-Frost";
	break;
}


$volume=$_POST['volume'];
$guarantee=$_POST['guarantee'];

echo $fridge_id."<br>";
echo $mark."<br>";
echo $model."<br>";
echo $type_defrosting."<br>";
echo $volume."<br>";
echo $guarantee."<br>";


mysqli_query($connect,"UPDATE `fridge` SET `fridge_id` = '$fridge_id', `mark` = '$mark', `model` = '$model', `type_defrosting` = '$type_defrosting', `volume` = '$volume', `guarantee` = '$guarantee' WHERE `fridge`.`fridge_id` = '$fridge_id' " );


?>
<!DOCTYPE html>
<html>
<head>
	<title>Изменение</title>
</head>
<body>
<a href="index2.php">На главную</a>

</body>
</html>



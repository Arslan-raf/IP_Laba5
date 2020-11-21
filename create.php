<?php

require_once 'connect.php';

$mark = $_POST['mark'];
$model = $_POST['model'];
//$type_defrosting = $_POST['type_defrosting'];
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

$volume= $_POST['volume'];
$guarantee = $_POST['guarantee'];


mysqli_query($connect, "INSERT INTO `fridge` (`fridge_id`, `mark`, `model`, `type_defrosting`, `volume`, `guarantee`) VALUES
 (NULL,'$mark', '$model', '$type_defrosting', '$volume', '$guarantee' )");

//header('location:index2.php');
?>
<a href="index2.php">На главную</a>
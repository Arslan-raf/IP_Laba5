<?php

require_once 'connect.php';
//$connect = mysqli_connect('localhost','root','root','lab4');

$id = $_POST['id'];
//$fridge_id=$_POST['fridge_id'];
//$center_id=$_POST['center_id'];

$date_repair=$_POST['date_repair'];
$end_date=$_POST['end_date'];
$client_name=$_POST['client_name'];
$cost=$_POST['cost'];


if($_POST['fridge_id']){
    $fridge_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['fridge_id']));
}
else{ echo("Введены некорректные данные");}


if($_POST['service_id']){
    $service_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['service_id']));
}
else{ echo("Введены некорректные данные");}



echo "id ".$id ."<br>";
echo "fridge ".$fridge_id."<br>";
echo "center ".$service_id."<br>";
echo $date_repair."<br>";
echo $end_date."<br>";
echo $client_name."<br>";
echo $cost."<br>";


mysqli_query($connect,"UPDATE `application` SET `fridge_id` = '$fridge_id', `center_id` = '$service_id', `date_repair` = '$date_repair', `end_date` = '$end_date', `client_name` = '$client_name', `cost` = '$cost' WHERE `application`.`id` = '$id ' " );


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



<?php

require_once 'connect.php';
//$connect = mysqli_connect('localhost','root','root','lab4');

$service_id = $_POST['service_id'];
$title=$_POST['title'];
$address=$_POST['address'];




echo $service_id."<br>";
echo $title."<br>";
echo $address."<br>";


mysqli_query($connect,"UPDATE `service_center` SET `service_id` = '$service_id', `title` = '$title', `address` = '$address' WHERE `service_center`.`service_id` = '$service_id' " );


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



<?php
require_once 'connect.php';
$service_id=$_GET['service_id'];
$service = mysqli_query($connect, "SELECT * FROM `service_center` WHERE `service_id` = '$service_id'");
$service= mysqli_fetch_assoc($service);
 print_r($service);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>

<h1>Изменение данных о холодильнике</h1>

<form action="update_service2.php" method="post">

<input type="hidden" name="service_id" value="<?= $service['service_id']?>">

	<p>Название</p>
<input type="text" name="title" value="<?= $service['title']?>">


	<p>Адрес</p>
<input type="text" name="address" value="<?= $service['address']?>" >
	
<input type="submit" value="Изменить" >
</form>





</body>
</html>
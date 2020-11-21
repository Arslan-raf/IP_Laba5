<?php
require_once 'connect.php';
$id=$_GET['id'];

$application = mysqli_query($connect, "SELECT * FROM `application` WHERE `id` = '$id' ");

$application= mysqli_fetch_assoc($application);
 print_r($application);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>

<h1>Изменение данных Заявке</h1>

<form action="update_application2.php" method="post">

<input type="hidden" name="id" value="<?= $application['id']?>">




<?php
require_once 'connect.php';
$products= mysqli_query($connect,"SELECT * FROM `fridge`");

   echo("id холодильника :<select fridge_id='fridge_id' name='fridge_id'>");

    echo("<option disabled>Выберите</option>");
     while($row = mysqli_fetch_array($products)){
        echo("<option value='$row[0]'> $row[0] - $row[2]</option>");
     }
  echo "</select>";
  echo "<br> </br>";

$services= mysqli_query($connect,"SELECT * FROM `service_center`");

   echo("id сервиса :<select service_id='service_id' name='service_id'>");
   
    echo("<option disabled>Выберите</option>");
     while($row2 = mysqli_fetch_array($services)){
        echo("<option value='$row2[0]'> $row2[0] - $row2[1]</option>");
     }
      echo "</select>";

     ?>





	<p>дата начала</p>
<input type="date" name="date_repair" value="<?= $application['date_repair']?>" >

	
	<p>дата конца</p>
<input type="date" name="end_date" value="<?= $application['end_date']?>" >
		
	<p>Имя клиента</p>
<input type="text" name="client_name" value="<?= $application['client_name']?>" >
	
		
	<p>Цена</p>
<input type="text" name="cost" value="<?= $application['cost']?>" >
	
<input type="submit" value="Изменить" >
</form>





</body>
</html>
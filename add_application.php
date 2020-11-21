
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h3>Добавление заявки</h3>
<form action="create_application.php" method="post">
	
	<p>начало</p>
<input type="date" name="date_repair" >
	
	<p>конец</p>
<input type="date" name="end_date" >

<p>имя заказчика </p>
<input type="text" name="client_name" >

<p>цена</p>
<input type="text" name="cost" >
<p></p>


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
<input type="submit" value="Добавить)" >
</form>

 </body>
</html>

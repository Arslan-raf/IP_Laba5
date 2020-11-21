<?php
require_once 'connect.php';
$fridge_id=$_GET['fridge_id'];
$product = mysqli_query($connect, "SELECT * FROM `fridge` WHERE `fridge_id` = '$fridge_id'");
$product= mysqli_fetch_assoc($product);
 print_r($product);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>

<h1>Изменение данных о холодильнике</h1>

<form action="update2.php" method="post">

<input type="hidden" name="fridge_id" value="<?= $product['fridge_id']?>">


	<p>Марка</p>
<input type="text" name="mark" value="<?= $product['mark']?>">
	
	<p>Модель</p>
<input type="text" name="model" value="<?= $product['model']?>" >
	
	<p>Тип разморозки</p>

<SELECT NAME="type_defrosting" value="<?= $product['type_defrosting']?>">
 <OPTION VALUE="1" > Автоматическая
 <OPTION VALUE="2">Капельная
 <OPTION VALUE="3">No-Frost
 </SELECT>

	<p>Внутренний объем</p>
<input type="number" name="volume" value="<?= $product['volume']?>">
	
	<p>Срок гарантии</p>
<input type="number" name="guarantee" value="<?= $product['guarantee']?>" >

<input type="submit" value="Изменить" >
</form>





</body>
</html>
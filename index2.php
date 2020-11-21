<?php
require_once 'connect.php';
?>
<html>
<head> 
	<meta charset="UTF-8">
	<title>Рафиков 6 вариант</title> 
</head>

<style>
	th, td{
		padding: 10px;

	}
	th{
		background:#6495ED; 
		color: #000000;
	}
	td{
		background: #B0E0E6;
	}
</style>

<body>

<table>
	<tr>
		<th>ID</th>
		<th>Марка</th>
		<th>Модель</th>
		<th>Тип разморозки</th>
		<th>Внутренний объем</th>
		<th>Срок гарантии</th>
	</tr>


<?php 

$products= mysqli_query($connect,"SELECT * FROM `fridge`");
$products = mysqli_fetch_all($products);
foreach ($products as $product) {
?>
<tr>
	<td><?= $product[0]?></td>
	<td><?= $product[1]?></td>
	<td><?= $product[2]?></td>
	<td><?= $product[3]?></td>
	<td><?= $product[4]?></td>
	<td><?= $product[5]?></td>
	<td><a href="update.php?fridge_id=<?= $product[0] ?>">Update</a></td>

	<td><a href="delete.php?fridge_id=<?= $product[0]?>">Delete</a></td>

</tr>
<?php

}
?>

</table>

<a href="add_fridge.html">Добавить холодильник</a>





<h3>Сервисный центр  </h3>
<table>
	<tr>
		<th>ID</th>
		<th>название</th>
		<th>адрес</th>
	</tr>


<?php 

$services= mysqli_query($connect,"SELECT * FROM `service_center`");
$services = mysqli_fetch_all($services);
foreach ($services as $service) {
?>
<tr>
	<td><?= $service[0]?></td>
	<td><?= $service[1]?></td>
	<td><?= $service[2]?></td>
	<td><a href="update_service.php?service_id=<?= $service[0] ?>">Update</a></td>

	<td><a href="delete_service.php?service_id=<?= $service[0]?>">Delete</a></td>

</tr>
<?php

}
?>

</table>
<a href="add_service.html">Добавить Сервисный центр </a>


<h3>Заявки  </h3>
<table>
	<tr>
		<th>ID</th>
		<th>id_fridge</th>
		<th>id_service</th>
		<th>Дата начала</th>
		<th>Дата конца</th>
		<th>Имя клиента</th>
		<th>Цена</th>
	</tr>


<?php 

$applications= mysqli_query($connect,"SELECT * FROM `application`");
$applications = mysqli_fetch_all($applications);
foreach ($applications as $application) {


?>
<tr>
	<td><?= $application[0]?></td>
	<td><?= $application[1]?></td>
	<td><?= $application[2]?></td>
<td><?= $application[3]?></td>
<td><?= $application[4]?></td>
<td><?= $application[5]?></td>
<td><?= $application[6]?></td>

	<td><a href="update_application.php?id=<?= $application[0] ?>">Update</a></td>

	<td><a href="delete_application.php?id=<?= $application[0]?>">Delete</a></td>

</tr>
<?php

}
?>

</table>
<a href="add_application.php">Добавить Заявку </a>



</body>
 </html>
<?
echo("<p><a href='gen_pdf.php'>Показать PDF </a>");
echo("<p><a href='gen_xls.php'>Показать xls </a>");
?>
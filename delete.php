<?php
require_once 'connect.php';
$fridge_id=$_GET['fridge_id'];
$fridge2_id=$_GET['fridge_id'];
 echo "$fridge_id <br>";
 echo "$fridge2_id <br>";

mysqli_query($connect,"DELETE FROM `application` WHERE `application`.`fridge_id` = '$fridge2_id'  ");



mysqli_query($connect,"DELETE FROM `fridge` WHERE `fridge`.`fridge_id` = '$fridge_id'");




//header('Location:index2.php');


?>
<a href="index2.php">на главную</a>
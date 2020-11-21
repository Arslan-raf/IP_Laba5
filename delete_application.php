<?php
require_once 'connect.php';
$id=$_GET['id'];

mysqli_query($connect,"DELETE FROM `application` WHERE `application`.`id` = '$id' ");
//header('Location:index2.php');
?>
<a href="index2.php">на главную</a>
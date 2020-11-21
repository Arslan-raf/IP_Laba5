<?php

require_once 'connect.php';

$title = $_POST['title'];
$address = $_POST['address'];




mysqli_query($connect, "INSERT INTO `service_center` (`service_id`, `title`, `address`) VALUES (NULL, '$title ', '$address')");

//header('location:index2.php');
?>
<a href="index2.php">На главную</a>
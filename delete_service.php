<?php
require_once 'connect.php';
$service_id=$_GET['service_id'];


echo "$service_id";

mysqli_query($connect,
"DELETE FROM `application` WHERE `application`.`center_id` = '$service_id' ");




mysqli_query($connect,
"DELETE FROM `service_center` WHERE `service_center`.`service_id` = '$service_id' ");
//header('Location:index2.php');

?>
<a href="index2.php">на главную</a>

<?php


require_once 'connect.php';

$date_repair = $_POST['date_repair'];
$end_date = $_POST['end_date'];
$client_name = $_POST['client_name'];
$cost = $_POST['cost'];


if($_POST['fridge_id']){
    $fridge_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['fridge_id']));
}
else{ echo("Введены некорректные данные");}


if($_POST['service_id']){
    $service_id  = htmlentities(mysqli_real_escape_string($connect, $_POST['service_id']));
}
else{ echo("Введены некорректные данные");}








mysqli_query($connect, "INSERT INTO `application` (`id`, `fridge_id`, `center_id`, `date_repair`, `end_date`, `client_name`, `cost`) VALUES (NULL, ' $fridge_id ', ' $service_id', '$date_repair', '$end_date', '$client_name', '$cost')");

//header('location:index2.php');
?>
<a href="index2.php">На главную</a>
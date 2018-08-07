<?php 
include 'db.php';
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
$senhaa = $_POST['senha'];
$senha = md5($senhaa);
$email = $_GET['email'];


$query = "UPDATE `users` SET `password`= '$senha' WHERE `email` = '$email' ";
 $connection->query($query);
header('location: index.php');
?>
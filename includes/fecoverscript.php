<?php 
include 'db.php';
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
$senhaa = $_POST['senha'];
$senha = md5($senhaa);
$email = $_GET['email'];
$queryrec = "SELECT * FROM `users` WHERE `email`= '$email'";
    $queryrecfst = $connection->query($queryrec);
 if($queryrecfst->num_rows > 0){
     while($queryf = $queryrecfst->fetch_assoc()){
         $rec_valid = $queryf['rec_valid'];
        

     }
if ($rec_valid == 1){
$query = "UPDATE `users` SET `password`= '$senha',`rec_valid` = 0 WHERE `email` = '$email' ";
 $connection->query($query);
header('location: index.php');
}else{
 echo"<h1> Você ja trocou a senha </h1>";
}
 }
?>
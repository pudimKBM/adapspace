<?php
if (isset($_POST['submit'])){
include 'db.php'; 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
    $email =  $_POST['email'];
    $queryrec = "SELECT * FROM `users` WHERE `email`= '$email'";
    $queryrecfst = $connection->query($queryrec);
 if($queryrecfst->num_rows > 0){
     while($queryf = $queryrecfst->fetch_assoc()){
         $email = $queryf['email'];
         $firstname = $queryf['firstname'];
         $lastname = $queryf['lastname'];
        

     }
        include 'library/passrecovery.php';
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d-m-Y');;
    $datefin= date('d-m-Y', strtotime($date. ' + 2 days'));
    $query_date = "UPDATE `users` SET `rec_date`= '$datefin' WHERE `email` = '$email' ";
    $queryrecfst = $connection->query($query_date);
    echo "email enviado";
    }else {
        echo "<h1> insira um email valido </h1>";
    }
}

?>
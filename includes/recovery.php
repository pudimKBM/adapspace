<?php
include '../db.php'; 
if (isset($_POST['submit'])){
    $queryrec = "SELECT FROM users where email = $_POST[email]";
    if($queryrec->num_rows >0){
        while($queryf = $queryrec->fetch_assoc()){
            $email = $queryf['email'];
            $senha = md5_decrypt($queryf['senha']);

        }
    }
}
?>
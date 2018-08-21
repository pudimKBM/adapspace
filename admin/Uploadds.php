<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
include '../db.php';
try{



$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Aquivo muito grande";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Isso nao é uma imgem lol";
        header('location: designer.php?id=1&category=Camisetas&icon=phone');
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sua imagem nao foi upada";
        header('location: designer.php?id=1&category=Camisetas&icon=phone');
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $queryadd ="INSERT INTO uploads( `path`, `usr_id`) values ('{$target_file}', '{$_SESSION['id']}')";
            if ($connection->query($queryadd) === true){
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
               header('location: designer.php?id=1&category=Camisetas&icon=phone');
            }
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            header('location: designer.php?id=1&category=Camisetas&icon=phone');
            
        } else {
            echo "Sorry, there was an error uploading your file.";
            header('location: designer.php?id=1&category=Camisetas&icon=phone');
        }
    }
}catch(Exception $e){
    echo $e->getMessage();

}

 ?>
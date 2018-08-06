<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require "vendor/autoload.php";
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "mx1.hostinger.com.br";
    $mail->Port  = 587;
    $mail->SMTPSecure= 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "adm@adaptspace.com.br";
    $mail->Password ="J3@ta@ti27";


    $mail->setFrom('adm@adaptspace.com.br','AdaptSpace');
    $mail->addAddress("$email", "$firstname");
    $mail->Subject = 'Bem vido a AdaptSpace';
    $mail->msgHTML("
    <html>
    <head>
    <title>Confirmaçao de registro</title>
    <h4> Bem vindo a AdaptSpace </h4>
    </head>
    <body>
    <p>Ola {$firstname} {$lastname} </p>
    <p>Bem vindo a AdaptSpace </p>
    <p>e-mail: {$email} </p>
    </body>
    </html>");
    $mail->AltBody= "Bem vindo {$firstname} {$lastname}" ;
    
    if (!$mail->send()){
        echo "erro" . $mail->ErrorInfo();

    }else{
        echo "message sent";

    }

?>
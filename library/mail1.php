<?php
    
    error_reporting(E_ALL);
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
    $mail->addAddress('adm@adaptspace.com.br', 'AdaptSpace');
    $mail->Subject = 'Bem vido a AdaptSpace';
    $mail->msgHTML('
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>');
    $mail->AltBody= 'ola @ meu gamigo como vai ' ;
    
    if (!$mail->send()){
        echo "erro" . $mail->ErrorInfo();

    }else{
        echo "message sent";

    }

?>
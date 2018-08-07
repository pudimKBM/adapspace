<?php
      include 'comfig_mail.php';

      
    $mail->addAddress("$email", "$firstname");
    $mail->Subject = 'Bem-vindo à Adapt Space';
    $mail->msgHTML("
    <html>
    <head>
    <title>Confirmaçao de registro</title>
    <h4> Bem-vindo à AdaptSpace </h4>
    </head>
    <body>
    <p>Ola {$firstname} {$lastname} </p>
    <p>Bem-vindo à AdaptSpace </p>
    <p>e-mail: {$email} </p>
    </body>
    </html>");
    $mail->AltBody= "Bem vindo {$firstname} {$lastname}" ;
    
   // if (!$mail->send()){
   //     echo "erro" . $mail->ErrorInfo();
//
   // }else{
   //     echo "message sent";
//
   // }
//
?>
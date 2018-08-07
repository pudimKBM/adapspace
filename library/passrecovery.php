<?php
      include 'comfig_mail.php';

    $mail->addAddress("{$email}", "{$firstname}");
    $mail->addBCC("adm@adaptspace.com.br", "AdaptSpace");
    $mail->Subject = 'Recuperaçao de senha AdaptSpace';
    $mail->msgHTML("
    <html>
    <head>
    <title>Opa esqueceu sua senha</title>
    <h4> Aqui esta sua senha de volta {$firstname} {$lastname} </h4>
    </head>
    <body>
    <p>usuario : {$email} </p>
    <p>e-mail: {$email} </p>
    </body>
    </html>");
    $mail->AltBody= "Bem vindo {$firstname} {$lastname}" ;
    
   //if (!$mail->send()){
   //    echo "erro" . $mail->ErrorInfo();

   //}else{
   //    echo "message sent";

   //}

?>
<?php
if (isset($_POST['aggree'])) {
    try {
        
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $usertype = $_POST['type'];
        
        $encryptedpass = md5($password);
        if (! isset($usertype)) {
            $usertype = 'client';
        }
        
        include 'db.php';
        
        // connecting & inserting data
        // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
        $query = "INSERT INTO `users`( `email`, `firstname`, `lastname`, `password`, `role`) VALUES (
'$email',
'$firstname',
'$lastname',
'$encryptedpass',
'$usertype')";
        
        if (! $connection->query($query) === TRUE) {
            
            echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
        }else {
            echo "<h5> conta criada com sucesso faça seu login";
            
        }
        
        $connection->close();
    } catch (Exception $e) {
        echo "$e";
    }
}

?>

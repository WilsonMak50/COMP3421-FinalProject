<?php

    session_start(); // starting a session
    include_once("config.php");// Database configuration file



    if(isset($_POST["login"]))  {
        
        // Getting Post Vlaues
        $username=$_POST['username'];
        $password=hash('SHA256',$_POST['password']);
        
        
        if ($stmt = $connection->prepare('select * from user where username = ? and password =?')) {
           
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();   
            $_SESSION['username'] = $username;
            echo 'You have successfully login';
        } else {
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        } 
        


       
    }
?>
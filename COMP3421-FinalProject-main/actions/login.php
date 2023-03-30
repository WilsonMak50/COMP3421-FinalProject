<?php
    session_start(); // starting a session
    include("connect.php"); // Database configuration file

    $user_name=$_POST['user_name'];
    $user_password=$_POST['user_password'];
   
    if($_SESSION['username'] != null){
        echo '<script> 
        alert("You have log in yet!");
        window.location="../index.html";
        </script>';
    }else{
    $sql="SELECT * from user where user_name='$user_name' and user_password='$user_password'";
    $result=mysqli_query(connect(),$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['username'] = $user_name;
        
        echo '<script>
        alert("Login successful!");
        window.location="../shop.php";
        </script>';
        
    }else{
        
        echo '<script>
        alert("Login unsuccessful! Wrong user name or passowrd !");
        window.location="../login.html";
        </script>';
        
    }
}
    ?>
<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "TutorSystem";
   $connection = mysqli_connect($server,$username,$password, $database);
   
   if(mysqli_connect_errno()) {
      echo("<p>cannot connect MySQL</p>");
   }

?>
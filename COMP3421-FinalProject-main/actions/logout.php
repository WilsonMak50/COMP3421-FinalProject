<?php
session_start();

if($_SESSION['username'] == null){
    echo '<script> 
    alert("You do not log in yet!");
    window.location="../index.html";
    </script>';
}
else{
$_SESSION['username'] = null;
session_destroy();

echo '<script> 
    alert("Logout successful!");
    window.location="../index.html";
    </script>';
}
?>
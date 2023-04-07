<?php 
include('connect.php');
function check_cart_empty(){

session_start();
$user_name=$_SESSION['username'];

$sql="SELECT user_name FROM user_purchase WHERE user_name='$user_name'";
$result=mysqli_query(connect(),$sql);

if(mysqli_num_rows($result) ==0){
    echo '<script> 
    alert("Your cart is empty!");
    window.location="../shop.php";
    </script>';
}
}
?>
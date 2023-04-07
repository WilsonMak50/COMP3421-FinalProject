<?php
include('connect.php');
session_start();
$user_name=$_SESSION['username'];

//store card info
$card_number=$_POST['card_number'];
$card_name=$_POST['card_name'];
$card_cvv=$_POST['card_cvv'];
$card_date=$_POST['card_date'];
$user_address=$_POST['user_address'];


$sql="INSERT INTO user_payment (user_name,card_number,card_name,card_cvv,card_date,user_address)
VALUE('$user_name','$card_number','$card_name','$card_cvv','$card_date','$user_address')";

$result=mysqli_query(connect(),$sql);

if(!isset($result)){
    echo '<script> 
    alert("Wrong input of payment info!!");
    window.location="../cart.php";
    </script>';
}

//clean the shooping cart
$sql="DELETE FROM user_purchase WHERE user_name='$user_name'";
$result=mysqli_query(connect(),$sql);

if(isset($result)){
    echo '<script> 
    alert("Thank you for your purchase!");
    window.location="../success.html";
    </script>';
}


?>


<?php 
include('connect.php');
session_start();
$user_name=$_SESSION['username'];
$product_id = $_POST['product_id'];

#check the puchase is existed or not
if($user_name == null){
    echo '<script> 
    alert("You didnt log in!");
    window.location="../login.html";
    </script>';
}else{
$sql="SELECT * FROM user_purchase WHERE user_name ='$user_name' AND product_id='$product_id'";
$result=mysqli_query(connect(),$sql);
if(mysqli_num_rows($result)>0){
    $update="UPDATE user_purchase SET quantity = quantity+1 where user_name ='$user_name' AND product_id='$product_id'";
    $result=mysqli_query(connect(),$update);
}else{
    $insert="INSERT INTO user_purchase (user_name ,product_id, quantity) VALUES ('$user_name','$product_id','1')";
    $result=mysqli_query(connect(),$insert);
}


if($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/cart.php'){
    echo '<script> 
    window.location="../cart.php";
    </script>';
}

if($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/shop.php'){
    echo '<script> 
    alert("Add to cart successful!");
    window.location="../shop.php";
    </script>';
}
    echo '<script> 
    alert("Add to cart successful!");
    window.location="../shop.php";
    </script>';

}
?>
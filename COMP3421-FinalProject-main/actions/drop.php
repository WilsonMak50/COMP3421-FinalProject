
<?php 
include('connect.php');
session_start();
$user_name=$_SESSION['username'];
$product_id = $_POST['product_id'];

#check the puchase is existed or not
$sql="SELECT quantity FROM user_purchase WHERE user_name ='$user_name' AND product_id='$product_id'";
$result=mysqli_query(connect(),$sql);
$quantity=mysqli_fetch_row($result);

if($quantity[0] == 1){
    $delete="DELETE FROM user_purchase WHERE user_name ='$user_name' AND product_id='$product_id'";
    $result=mysqli_query(connect(),$delete);
}

$drop="UPDATE user_purchase SET quantity = quantity-1 WHERE user_name ='$user_name' AND product_id='$product_id'";
$result=mysqli_query(connect(),$drop);
#check the puchase is existed or not




if($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/cart.php'){
    echo '<script> 
    window.location="../cart.php";
    </script>';
}

if($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/shop.php'){
    echo '<script> 
    window.location="../shop.php";
    </script>';
}

?>
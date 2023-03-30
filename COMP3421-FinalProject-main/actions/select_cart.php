<!-- List all product's infromation in cart.php-->
<?php

#slect all item from product table
function cart_list(){
    include('connect.php');
    session_start();
    $user_name=$_SESSION['username'];

    $sql="SELECT distinct quantity, product.* FROM user_purchase, product where user_purchase.product_id=product.product_id AND user_name= '$user_name'";
    $result_group=mysqli_query(connect(),$sql);

    if(mysqli_num_rows($result_group)>0){
        $groups=mysqli_fetch_all($result_group,MYSQLI_ASSOC);
    }
return $groups;
}

?>
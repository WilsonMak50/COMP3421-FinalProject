<!-- List all product's infromation in Shop.html-->
<?php
include('connect.php');
#slect all item from product table
function product_list(){


    $sql ="SELECT * FROM product where 1";
    $result_group=mysqli_query(connect(),$sql);

    if(mysqli_num_rows($result_group)>0){
        $groups=mysqli_fetch_all($result_group,MYSQLI_ASSOC);
    } 
return $groups;
}
function product_detail($product_id){

    $sql ="SELECT * FROM product where product_id ='$product_id'";
    $result=mysqli_query(connect(),$sql);

    if(mysqli_num_rows($result)>0){
        $description=mysqli_fetch_array($result);
    } 
return $description;
}


?>
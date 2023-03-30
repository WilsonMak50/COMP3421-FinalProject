<!-- List all product's infromation in Shop.html-->
<?php

#slect all item from product table
function product_list(){
    include('connect.php');

    $sql ="SELECT * FROM product where 1";
    $result_group=mysqli_query(connect(),$sql);

    if(mysqli_num_rows($result_group)>0){
        $groups=mysqli_fetch_all($result_group,MYSQLI_ASSOC);
    } 
return $groups;
}


?>
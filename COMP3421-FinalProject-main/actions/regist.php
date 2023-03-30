<?php
    include("connect.php");
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $user_cpassword=$_POST['user_cpassword'];


    #error message if password is invaild 
if($user_password != $user_cpassword){
    echo '<script>
    alert("Password do not match");
    window.location="../regist.html";
    </script>';
}else{
    #SQL to inset data to Grroupingsystem database / userdata table
    $sql="insert into user (user_name, user_password, user_email) VALUES('$user_name','$user_password','$user_email')";
    $result=mysqli_query(connect(),$sql);
    

    #return msg when SQL run successful
   if($result){
        echo '<script>
        alert("Register Successful");
        window.location="../";
        </script>';
    }else{
        echo '<script>
        alert("The user name has been used!");
        window.location="../regist.html";
        </script>';
        
    }


}


?>
?>
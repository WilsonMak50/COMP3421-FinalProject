<!-- Connect to local's mySQL database-->
<?php 

#connect to database
function connect(){
return mysqli_connect("localhost","root","root","COMP3521");

/*
#test the connection is successful or not
if($con)
    echo "connect Scuessful";
#return error message if conncet unsuccessful 
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
*/

}


?>
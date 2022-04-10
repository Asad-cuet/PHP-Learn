<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$id=$_REQUEST['id'];
$connection= mysqli_connect('localhost','asad','','user');#mysqli_connect('HostName','Username','Password','DB_Name');



$update_query="UPDATE user_info SET First_name='$fname',Last_name='$lname',Email='$email' WHERE ID=$id";
$update=mysqli_query($connection,$update_query);

if($update) {
    header("location:table_update.php?updated");
}

?>
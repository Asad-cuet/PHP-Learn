<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$insert="INSERT INTO user_info3(First_name,Last_name,Email) VALUES ('$fname','$lname','$email');";

$send=mysqli_query($connection,$insert);
if($send) {
    header("location:form_insert.php?msg");
} 
?>
<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$query="INSERT INTO user_info3(First_name,Last_name,Email) VALUES ('$fname','$lname','$email');";

$result=mysqli_query($connection,$query);
if($result) {
    echo "<br>Form submission succesful";
} 
?>
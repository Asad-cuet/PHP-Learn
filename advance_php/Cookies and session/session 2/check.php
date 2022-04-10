<?php
session_start();
$connection=mysqli_connect('localhost','root','','session');
if($connection) { echo "connected<br>";}
$user_name=$_REQUEST['user_name'];
$user_pass=$_REQUEST['pass'];
 $query="SELECT * FROM login WHERE User_name='$user_name' AND Password='$user_pass'";
 $request=mysqli_query($connection,$query);
 if ($request) {echo "done<br>";}
 $row_count=mysqli_num_rows($request);
 if ($row_count) {
     echo "Login success";
     $_SESSION['user_name']=$user_name;
       header("location:welcome.php");
 } else {
     echo "Login failed";
 }

?>
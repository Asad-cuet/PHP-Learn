<?php
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
header("location:3rd_page.php?test=$user"); // use & for multiple data
?>
<?php
#get method is visible to everyone.so don't use it for secret data
$user=$_GET['username'];
$pass=$_GET['password'];
echo $user.$pass;


?>
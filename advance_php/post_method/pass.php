<?php
#post method data is invisible to everyone..use it for secret data
$user=$_POST['username']; #you can also use REQUEST method
$pass=$_POST['password'];
echo $user.$pass;
?>
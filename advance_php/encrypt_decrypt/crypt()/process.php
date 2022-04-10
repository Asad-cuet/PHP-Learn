<?php
$name=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
$hash_format="$2y$07$";
$salt="asadulis56ylamham56y54zah";
$conC=$hash_format.$salt;
$pass_encrypt=crypt($pass,$conC);
echo "you entered ".$pass;
echo "<br>encrypted password=".$pass_encrypt;
echo "<br>encrypted password 2=".crypt($pass) ;
?>
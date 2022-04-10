<?php
include 'function.php';
$connection= mysqli_connect('localhost','root','','book_cellar');#mysqli_connect('HostName','Username','Password','DB_Name');
session_start();
function session($ss_name,$value)
{
      $_SESSION[$ss_name]=$value;
}
function array_session($ss_name,$value)
{
array_push($_SESSION[$ss_name],$value); // id adding in array
}
function array_to_string($key,$arr)
{
   return implode($key,$arr);  // implode differing id by ,
}
if(isset($_POST['submit']))
{
 echo get("pass");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="post">

 <input type="password" name="pass">
 <input type="submit" name="submit" value="login">   
</body>
</html>
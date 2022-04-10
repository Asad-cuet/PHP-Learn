<?php

$connection= mysqli_connect('localhost','asad','','Book_cellar');#mysqli_connect('HostName','Username','Password','DB_Name');

?>

<?php
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}


?>
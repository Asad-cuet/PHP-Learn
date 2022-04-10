<?php


if(!isset($_SESSION['username'])) {   // If try to login by url
    header("location:logout.php");
  }
$connection= mysqli_connect('localhost','asad','','live_news_project') or die("Not Connected". mysqli_error());#mysqli_connect('HostName','Username','Password','DB_Name');
?>
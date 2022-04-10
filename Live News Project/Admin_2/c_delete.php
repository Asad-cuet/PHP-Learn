<?php
include 'config.php';
session_start();

if(!isset($_SESSION['username'])) {   // If try to login by url
    header("location:logout.php");
  }

    if(!empty($_REQUEST['check_data'])) {$check_data=$_REQUEST['check_data'];} else {header("location:user.php");}
    $id_seper=implode(",",$check_data);
    $query_M="DELETE FROM Category WHERE Category_id in ($id_seper)";
    $table=mysqli_query($connection,$query_M);
    if($table) { header("location:category.php");}




?>
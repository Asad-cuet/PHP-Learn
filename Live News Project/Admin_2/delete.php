<?php
include 'config.php';
session_start();

if(!isset($_SESSION['username'])) {   // If try to login by url
    header("location:logout.php");
  }

    if(!empty($_REQUEST['check_data'])) {$check_data=$_REQUEST['check_data'];} else {header("location:user.php");}
    $id_seper=implode(",",$check_data);
    $query_M="DELETE FROM user_info WHERE ID in ($id_seper)";
    $table=mysqli_query($connection,$query_M);
    if($table) { header("location:user.php");}




?>
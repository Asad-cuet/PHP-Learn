<?php
session_start();
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}


$post_id=$_REQUEST['post_id'];
include 'config.php';
$delete_query="DELETE FROM post WHERE Post_id=$post_id;";
$delete=mysqli_query($connection,$delete_query);
if($delete) { header("location:post.php");}


?>
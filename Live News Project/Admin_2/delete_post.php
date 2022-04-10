<?php
session_start();

if(!isset($_SESSION['username'])) {   // If try to login by url
    header("location:logout.php");
  }

include 'config.php';


    $id=$_REQUEST['id'];
    $cat_name=$_REQUEST['cat'];
    $img_name=$_REQUEST['img'];
    unlink("uploads/$img_name");
    
    $query_M="DELETE FROM post WHERE Post_id='$id'";
    $table=mysqli_query($connection,$query_M) or die("Delete Failed");


    $update_query= "UPDATE category SET Post = Post - 1 WHERE Category_name='$cat_name'";  
    $update=mysqli_query($connection,$update_query) or die("Update Failed") ;   
    
    if($table && $update) { header("location:post.php");}

   

    
    




?>
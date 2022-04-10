<?php
include 'header.php';


if(!isset($_SESSION['username'])) {   // If try to login by url
    header("location:logout.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="W3.JS.js"></script>  <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">  <!-- W3.CSS library -->
<link rel="stylesheet" href="my-css.css">  <!-- My CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Icon Library -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <style>
  .my-h-center { display: block; margin-left: 35%;margin-right: 35%;width:30%}
  .my-white {background-color: #F1F1F1;}
</style>
</head>
<body class="my-white">

<div class="w3-center">
<div class="w3-bar">
<div class="w3-bar-item"><h3>Update Category Name</h3></div>
</div>
</div>
<?php

//Collecting Data

$rec_id=$_REQUEST['send_id'];
include 'config.php';
$select_query="SELECT * FROM category WHERE Category_id=$rec_id";
$select=mysqli_query($connection,$select_query);
while($row=mysqli_fetch_row($select)) {
      $c_id=$row[0];
      $c_name =$row[1];
      $post_no=$row[2];
?> 
<div class="my-h-center  w3-white">
<form method="post">
<div class="w3-container">
<h6>Category Name</h6>
<input type="text" name="update_c_name" value="<?php echo $c_name; ?>" class="w3-block">
</div><br>


<div class="w3-container">
<h6>Number of Post</h6>
<input type="text" name="update_post_no" value="<?php echo $post_no; ?>" class="w3-block">
</div><br>


<div class="w3-container">
<input type="submit" name="c_update" value="Save" class="w3-button w3-green w3-hover-red">
</div><br>
</form>
</div>
<?php
}

// Collecting End


// Updating
if(isset($_REQUEST['c_update'])) {

            $update_c_name=ucfirst($_REQUEST['update_c_name']);
            $update_post_no=ucfirst($_REQUEST['update_post_no']);
            include 'config.php';
            $update_query="UPDATE category SET Category_name='$update_c_name',Post='$update_post_no' WHERE Category_id='$rec_id'";
            $update=mysqli_query($connection,$update_query) or die("Failed");
            if($update) {
                  header("location:category.php");
            }
      }
      






?>
<?php
session_start();
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="W3.JS.js"></script>  <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">  <!-- W3.CSS library -->
<link rel="stylesheet" href="my-css.css">  <!-- My CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Icon Library -->

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!-- Jquery Library -->
   <!-- Bootstrap 4  Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.my-fixed { position:fixed; right:20px;top:20px;}
</style>
 
</head>
<body class="my-white" style="background-color:#F1F1F1">
<a href="logout.php" class="w3-button w3-teal" style="position:fixed;right:10px;bottom:30px;">Logout</a>
<div class="w3-bar w3-padding w3-teal">
<div class="w3-bar-item"><h3>Website Name</h3></div>
<div class="w3-bar-item w3-wide w3-right"><h3>We are here to provide you best survice</h3></div>
  </div>

<div class="w3-center">
<div class="w3-bar w3-white">
<a href="post.php" class="w3-bar-item w3-button w3-mobile" id="post">Post</a>
<a href="category.php" id="cat" class="w3-bar-item w3-button w3-mobile">Category</a>
<a href="book_info.php" id="book_info" class="w3-bar-item w3-button w3-mobile">Book Information</a>
<a href="order.php" id="order" class="w3-bar-item w3-button w3-mobile">Customer Order</a>
<a href="confirm.php" id="confirm" class="w3-bar-item w3-button w3-mobile">Order Confirmed</a>
<a href="deliver.php" id="deliver" class="w3-bar-item w3-button w3-mobile">Order Delivered</a>
<a href="bin.php" id="bin" class="w3-bar-item w3-button w3-mobile">Bin</a>
</div>
</div>
</body>

</html>
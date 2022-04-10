<?php

session_start();
if(!isset($_SESSION['username'])) {
  header("location:header.php");
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
<body class="my-white">

<div class="my-fixed"><a class=" w3-button w3-teal" href="logout.php">Logout</a></div>

<div class="w3-panel w3-center">
<h1>News</h1>



<div class="w3-bar w3-white">

<a class="w3-bar-item w3-button">Post</a>
<a class="w3-bar-item w3-button">Category</a>
<a id="user" class="w3-bar-item w3-button" href="user.php">User</a>

</div>
</div>






</body>

</html>
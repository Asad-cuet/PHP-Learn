<?php

session_start();
if(isset($_SESSION['username'])) {   // If already Logged In
  header("location:post.php");
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

<style>
  .my-h-center { display: block; margin-left: auto;margin-right: auto;width:100%; max-width:370px;}
  .my-white {background-color: #F1F1F1;}
  .my-fixed { position:fixed; right:20px;top:20px;}
</style>

</head>


<body class="my-white">   

<div class="my-fixed"><a class=" w3-button w3-teal" href="../index.php">News</a></div>



<?php                                          // PHP Area start

if(isset($_REQUEST['log_in'])) {
    include 'config.php';
    $admin_user=ucfirst(mysqli_real_escape_string($connection,$_REQUEST['admin_user']));
    $admin_pass=ucfirst(mysqli_real_escape_string($connection,md5($_REQUEST['admin_pass'])));

    $verify_query="SELECT * FROM user_info WHERE Username='$admin_user' AND Password='$admin_pass'";
    $verify=mysqli_query($connection,$verify_query) or die("Query Failed");
    if(mysqli_num_rows($verify)>0) {
        while($row=mysqli_fetch_row($verify)) {
          
          session_start();
          $_SESSION['username']=$row[3];
          $_SESSION['id']=$row[0];
          $_SESSION['role']=$row[5];
          header("location:post.php");

        }
    } 
}





                                                     // PHP Area close
?>

<div class="w3-panel w3-center w3-wide">
<h1>News Project</h1>
</div>


<!-- Form Start Here -->
<div class="my-h-center w3-white">
<div class="w3-bar w3-teal">
<h3 class="w3-bar-item">Admin & Moderator</h3>
</div>

<?php   // False message
if(isset($_REQUEST['log_in'])) {
 
  if(mysqli_num_rows($verify)==0) {
    echo "<div class='w3-container'><h5 class='w3-text-red'>Username or Password is incorrect</h5></div>";
  }  

}
?>


<form class="w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<h6 class="w3-left w3-margin-left">Username</h6>
<div class="w3-container">
<input type="text" name="admin_user" class="w3-block">
</div><br>


<h6 class="w3-left w3-margin-left">Password</h6>
<div class="w3-container">
<input type="password" name="admin_pass" class="w3-block">
</div><br>



<div class="w3-container">
<input type="submit" name="log_in" value="Login" class="w3-button w3-hover-red w3-left w3-green">
</div><br>


</form>

</div>
<!-- Form Start Here -->
</body>


</html>
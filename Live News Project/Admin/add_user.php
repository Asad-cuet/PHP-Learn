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
  .my-h-center { display: block; margin-left: 35%;margin-right: 35%;width:30%}
  .my-white {background-color: #F1F1F1;}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("").addClass("");

});
</script>  
</head>
<body class="my-white w3-sans-serif">




  <?php include 'header.php';?>
<?php
if(isset($_REQUEST['add'])) {

  include 'config.php';
  $fname=ucfirst(mysqli_real_escape_string($connection,$_POST['fname']));
  $lname=ucfirst(mysqli_real_escape_string($connection,$_POST['lname']));
  $user_name=strtolower(mysqli_real_escape_string($connection,$_POST['username']));
  if(!empty($_POST['pass'])) {$pass=mysqli_real_escape_string($connection,md5($_POST['pass']));}
    else { $pass=md5(rand(1000,9999));}

  if(!empty($_POST['role'])) {$role=mysqli_real_escape_string($connection,$_POST['role']);}
  if(!empty($user_name)){
      $check_query="SELECT Username FROM user_info WHERE Username='$user_name'";
      $check=mysqli_query($connection,$check_query) or die(" Check query failed");
      $count=mysqli_num_rows($check);
      if (!$count>0)  {
            if(!empty($fname) && !empty($role)){
                  $insert_query="INSERT INTO user_info(First_name,Last_name,Username,Password,Role) VALUES ('$fname','$lname','$user_name','$pass','$role');";
                  $insert=mysqli_query($connection,$insert_query) or die("Insert Query Failed");
                              }
            }
      }
}
?>





<div class="w3-panel w3-margin-left">
<h3>Add Users</h3>
</div>

<div class="my-h-center w3-white">

<form class=" w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off"><br>






<h6 class="w3-left w3-margin-left">First Name</h6>
<div class="w3-container">
<input type="text" name="fname" class="w3-block w3-border"></div>
<?php if(isset($_REQUEST['add'])) { 
  if(empty($fname)) { echo "First Name is Required";}
  } ?><br>







<h6 class="w3-left w3-margin-left">Last Name</h6>
<div class="w3-container">
<input type="text" name="lname" class="w3-block w3-border"></div><br>






<h6 class="w3-left w3-margin-left">Username</h6>
<div class="w3-container">
<input type="text" name="username" class="w3-block w3-border"></div>
<?php if(isset($_REQUEST['add'])) { 
  if(empty($user_name)) { echo "Username is Required";}
  if(!empty($user_name)) { if($count>0) { echo "Username is aready exist";}}
  } ?><br>




<h6 class="w3-left w3-margin-left">Password</h6>
<div class="w3-container">
<input type="password" name="pass" class="w3-block w3-border"></div>
<?php if(isset($_REQUEST['add'])) { 
  if(empty($_POST['pass'])) { echo "Password generated automatically";}
  } ?><br>



<h6 class="w3-left w3-margin-left">User Role</h6>
<div class="w3-container">
<select class="w3-select w3-border w3-block" name="role">
<option value=" " disabled selected>Choose</option>
<option value="Moderator">Moderator</option>
<option value="Admin">Admin</option>
</select></div>
<?php if(isset($_REQUEST['add'])) { 
  if(empty($role)) { echo "Role is Required";}
  } ?><br>


<div class="w3-container">
<input type="submit" value="Add" name="add" class="w3-left w3-button w3-hover-red w3-green">
</div><br>


</form>

</div>





<script>

//document.getElementById("#user").
</script>

</body>

</html>
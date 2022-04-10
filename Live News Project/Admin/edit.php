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
    
<?php

//Collecting Data
if(!empty($_REQUEST['rec_id'])) {
$rec_id=$_REQUEST['rec_id'];
include 'config.php';
$select_query="SELECT * FROM user_info WHERE ID=$rec_id";
$select=mysqli_query($connection,$select_query);
while($row=mysqli_fetch_row($select)) {
    $id=$row[0];
    $fname=$row[1]; $lname=$row[2];
    $role=$row[5];
}
}

//Updating Data
if(isset($_REQUEST['update'])) {

    include 'config.php';
    $id=$_REQUEST['pass_id'];
    $fname=ucfirst(mysqli_real_escape_string($connection,$_POST['fname']));
    $lname=ucfirst(mysqli_real_escape_string($connection,$_POST['lname']));
    if(!empty($_POST['role'])) {$role=mysqli_real_escape_string($connection,$_POST['role']);}
    if(!empty($fname) && !empty($role)){
        $update_query="UPDATE user_info SET First_name='$fname',Last_name='$lname',Role='$role' WHERE ID=$id";
        $update=mysqli_query($connection,$update_query) or die("Update Failed");
        if($update==true) {
            header("location:user.php");
        } 
                                }
                        
              }

?>

<?php include 'header.php'; ?> 
<div class="w3-container"><h3>Update</h3></div>



<div class="my-h-center w3-white">
<form class=" w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?pass_id=<?php echo $id; ?>" autocomplete="off"><br>




<h6 class="w3-left w3-margin-left">First Name</h6>
<div class="w3-container">
<input type="text" name="fname" class="w3-block w3-border" value="<?php echo $fname;?>"></div>
<?php if(isset($_REQUEST['update'])) { 
  if(empty($fname)) { echo "First Name is Required";}
  } ?><br>






<h6 class="w3-left w3-margin-left">Last Name</h6>
<div class="w3-container">
<input type="text" name="lname" class="w3-block w3-border" value="<?php echo $lname;?>"></div><br>






<h6 class="w3-left w3-margin-left">User Role</h6>
<div class="w3-container">
<select class="w3-select w3-border w3-block" name="role">
<option value="" disabled>Choose</option>
<option value="Moderator" <?php if($role=='Moderator') {echo "selected";}?>>Moderator</option>
<option value="Admin" <?php if($role=='Admin') {echo "selected";}?>>Admin</option>
</select></div>
<?php if(isset($_REQUEST['update'])) { 
  if(empty($role)) { echo "Role is Required";}
  } ?>
<br>


<div class="w3-container">
<input type="submit" value="Update" name="update" class="w3-left w3-button w3-hover-red w3-green">
</div><br>


</form>

</div>



</body>
</html>
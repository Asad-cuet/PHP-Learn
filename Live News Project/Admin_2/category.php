<?php
include 'header.php';

if($_SESSION['role']=='Moderator') {    // Moderator Has not Permission For this Page
   header("location:logout.php");
 }

  if(!isset($_SESSION['username'])) {   // If try to login by url
      header("location:logout.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="W3.JS.js"></script>                               <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">                      <!-- W3.CSS library -->
<link rel="stylesheet" href="my-css.css">                       <!-- My CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                                             <!-- Icon Library -->

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!-- Jquery Library -->

<style>    /* CSS  */
  .my-h-center { display: block; margin-left: 35%;margin-right: 35%;width:30%}
  .my-white {background-color: #F1F1F1;}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("#category").addClass("w3-dark-gray");

});
</script>  


</head>




<body class="my-white w3-sans-serif">     <!-- Body-->

<div class="w3-bar">
<div class="w3-bar-item" href="add_category.php"><h4>All Categories</h4></div>
<a class="w3-bar-item w3-button w3-right w3-red" href="add_category.php"><h6>Add Category</h6></a>
</div>

<form method="post" action="c_delete.php">
<div class="w3-container">
<table class="w3-table-all">
<tr class="w3-indigo">
<th>Serial Number</th>
<th>Post Category</th>
<th>No. of Posts</th>
<th>Edit</th>
<th><input type="submit" value="Delete" onclick="return confirm('Are you sure')" class="w3-button w3-blue w3-hover-red"></th>
</tr>

<?php
include 'config.php';
$read_query="SELECT * FROM Category ORDER BY Category_id DESC ";
$result=mysqli_query($connection,$read_query);
$s_r=0;
 while($row=mysqli_fetch_row($result)) {
    $c_id=$row[0];
    $c_name=$row[1];
    $c_post=$row[2];
    $s_r++;
?>
<tr>
<td><?php echo $s_r; ?></td>
<td><?php echo $c_name; ?></td>
<td><?php echo $c_post; ?></td>
<td><a href="c_edit.php?send_id=<?php echo $c_id; ?>"><span class="fa fa-edit"></span>Edit</a></td>
<td><input type="checkbox" name="check_data[]" value="<?php echo $c_id; ?>"></td>
</tr>
<?php
 }
 ?>
 </table>
 </div>
 </form>
</body>


</html>
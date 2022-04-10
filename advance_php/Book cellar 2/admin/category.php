<?php

include 'header.php';

?>


<?php
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}


?>






<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
  .my-h-center { display: block; margin-left:auto;margin-right:auto;width:30%}
</style>
<script>   //jquery goes here
  // 2nd query start




  $(document).ready(function(){


      $("#cat").addClass("w3-dark-gray");

  });

// 2nd query end


</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">




<div class="w3-container">
<div class="w3-bar">
<a href="add_category.php" class="w3-bar-item w3-right w3-red w3-hover-green">Add Category</a>
</div>
</div>



<div class="w3-panel">
<table class="w3-table-all">
<tr>
<th>Serial Number</th>
<th>Category Id</th>
<th>Category Name</th>
<th>No. of Book</th>
</tr>

<?php
include 'config.php';
 $read_query="SELECT * FROM Category";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
 $result=mysqli_query($connection,$read_query);
 $s_r=1;
 while($row=mysqli_fetch_row($result)) {
       $cat_id=$row[0];
       $cat_name=$row[1];
       $no_book=$row[2];
       

?>
<tr>
<td><?php echo $s_r; ?></td>
<td><?php echo $cat_id; ?></td>
<td><?php echo $cat_name; ?></td>
<td><?php echo $no_book; ?></td>
</tr>
<?php
$s_r++;
 }
 ?>
 </table>
</div>



</body>
</html>
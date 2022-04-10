<?php
include 'header.php';

if($_SESSION['role']=='Moderator') {  // Moderator Has not Permission For this Page
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





<?php      // Collecting data
if(isset($_REQUEST['add'])) {

  include 'config.php';
  $c_name=ucfirst(mysqli_real_escape_string($connection,$_POST['c_name']));
 
  if(!empty($c_name)){
                  $insert_query="INSERT INTO category(Category_name) VALUES ('$c_name');";
                  $insert=mysqli_query($connection,$insert_query) or die("Insert Query Failed");

                              }
            }
      

?>





<div class="w3-center">
<div class="w3-bar">
<div class="w3-bar-item"><h3>Add Category Name</h3></div>
</div>
</div>

<div class="my-h-center w3-white">

<form class=" w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off"><br>






<h6 class="w3-left w3-margin-left">Category Name</h6>
<div class="w3-container">
<input type="text" name="c_name" class="w3-block w3-border"></div>
<?php if(isset($_REQUEST['add'])) { 
  if(empty($c_name)) { echo "Category Name is Required";}
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
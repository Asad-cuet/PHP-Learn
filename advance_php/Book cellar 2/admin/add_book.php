<?php

include 'header.php';

?>

<?php
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}


?>





<?php


if(isset($_REQUEST['post'])) {

  include 'config.php';
 // inside  collecting
  $title=ucfirst(mysqli_real_escape_string($connection,$_POST['title']));
  $author=ucfirst(mysqli_real_escape_string($connection,$_POST['author']));
  $publish=mysqli_real_escape_string($connection,$_POST['publish']);
  $price=mysqli_real_escape_string($connection,$_POST['price']);
  $disc=mysqli_real_escape_string($connection,$_POST['disc']);
  $count=100-$disc;
  $f_price=$price*($count/100);
  if(!empty($_POST['c_name'])) {$cat_id=$_POST['c_name'];  }
  if(!empty($_POST['avail'])) {$avail=$_POST['avail'];  } else {$avail="Yes";}
  $date=date("m-d-Y");
  if(!empty($_FILES['image'])) {$img=$_FILES['image'];$img_name=$img['name'];if(empty($img_name)) {$img_name_c="../default.png";} else {$img_tmp_name=$img['tmp_name'];$destin="uploads/";$img_name_c=uniqid().$img['name'];move_uploaded_file($img_tmp_name,$destin.$img_name_c);}} 
 
  
  if(!empty($title) && !empty($author) && !empty($publish) && !empty($cat_id) && !empty($price)) {

  $insert_query1="INSERT INTO book_info (Book_picture,Book_title,Book_author,Published,Price,Discount,F_price,Category,Available) VALUES ('$img_name_c','$title','$author','$publish','$price','$disc','$f_price','$cat_id','$avail');";
  $insert_query2= "UPDATE category SET No_of_book = No_of_book + 1 WHERE Category_id='$cat_id'";
  $insert1=mysqli_query($connection,$insert_query1) or die("Insert Query Failed");
  $insert2=mysqli_query($connection,$insert_query2) or die("Update Query Failed");
  if($insert1 && $insert2) {
        header("location:book_info.php");
  }
   }
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

    $("").addClass("");

  });

// 2nd query end


</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">




<div class="my-h-center w3-white w3-mobile">

<form class=" w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off" enctype="multipart/form-data"><br>






<h6 class="w3-left w3-margin-left">Title*</h6>
<div class="w3-container">
<input type="text" name="title" class="w3-block w3-border"></div>
<br>







<h6 class="w3-left w3-margin-left">Author*</h6>
<div class="w3-container">
<input type="text" name="author" class="w3-block w3-border"></div><br>
<br>



<h6 class="w3-left w3-margin-left">Publish Year*</h6>
<div class="w3-container">
<input type="text" name="publish" class="w3-block w3-border"></div><br>
<br>






<h6 class="w3-left w3-margin-left">Price*</h6>
<div class="w3-container">
<input type="text" name="price" class="w3-block w3-border"></div><br>
<br>



<h6 class="w3-left w3-margin-left">Discount(%)*</h6>
<div class="w3-container">
<input type="text" name="disc" class="w3-block w3-border"></div><br>
<br>




<h6 class="w3-left w3-margin-left">Category*</h6>
<div class="w3-container">
<select class="w3-select w3-border w3-block" name="c_name">
<option value=" " disabled selected>Choose</option>
<?php
include 'config.php';
$read_query="SELECT * FROM category";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {
     $cat_id=$row[0];
     $cat_name=$row[1];

?>
<option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
<?php
}
?>


</select></div>
<br>



<h6 class="w3-left w3-margin-left">Available</h6>
<div class="w3-container">

<select class="w3-select w3-border w3-block" name="avail">
<option value=" " disabled selected>Choose</option>
<option value="Yes">Yes</option>
<option value="No">No</option>

</select></div>
<br>


<h6 class="w3-left w3-margin-left">Upload Picture</h6>
<div class="w3-container">
<input type="file" name="image" class="w3-block w3-border w3-button"></div>
<br>






<div class="w3-container">
<input type="submit" value="Add Book" name="post" class="w3-left w3-button w3-hover-red w3-green">
</div><br>


</form>

</div>




</body>
</html>
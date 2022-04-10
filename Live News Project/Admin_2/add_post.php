<?php
include 'header.php';

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





<?php
if(isset($_REQUEST['post'])) {

  include 'config.php';
 // inside  collecting
  $t_name=ucfirst(mysqli_real_escape_string($connection,$_POST['t_name']));
  $description=ucfirst(mysqli_real_escape_string($connection,$_POST['desc']));
  if(!empty($_POST['c_name'])) {$cat_name=$_POST['c_name'];  }
  $date=date("m-d-Y");
  $author=$_SESSION['id'];
  if(!empty($_FILES['image'])) {$img=$_FILES['image'];$img_name=$img['name'];}






  // If all inputed
  if(!empty($t_name) && !empty($description) && !empty($cat_name) && !empty($img_name)) {
      $img_tmp_name=$img['tmp_name'];
      $img_size=$img['size'];





      // Extension Check
    $extension=array("jpeg","jpg","png");
    $img_ext=end(explode(".",$img_name))  ;
    if(in_array($img_ext,$extension)=== true) {  // inside inside  if extension ok







      if($img_size<2097152) {   // if size ok
       $destin="uploads/";
       $img_name_c=uniqid().$img['name'];
       move_uploaded_file($img_tmp_name,$destin.$img_name_c);  # move_upload_file(file tmp_name,destination);
      // For remove=unlink("location/filename");

      $insert_query1="INSERT INTO post (Title_name,Description,Category_name,Post_date,Author,Image) VALUES ('$t_name','$description','$cat_name','$date','$author','$img_name_c');";
      $insert_query2= "UPDATE category SET Post = Post + 1 WHERE Category_name='$cat_name'";
      $insert1=mysqli_query($connection,$insert_query1) or die("Insert Query Failed");
      $insert2=mysqli_query($connection,$insert_query2) or die("Update Query Failed");
      if($insert1 && $insert2) {
            header("location:post.php");
      }


} else { $over_size="tyrt."; }//if size ok
               } else { $msg="Not ok";} // if et are no ok 
 
       
  //Image area end

                                          
            }
          }

?>





<div class="w3-panel w3-margin-left">
<h3>Add Post</h3>
</div>

<div class="my-h-center w3-white">

<form class=" w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off" enctype="multipart/form-data"><br>






<h6 class="w3-left w3-margin-left">Title</h6>
<div class="w3-container">
<input type="text" name="t_name" class="w3-block w3-border"></div>
<?php if(isset($_REQUEST['post'])) { 
  if(empty($t_name)) { echo "Title is Required";}
  } ?><br>







<h6 class="w3-left w3-margin-left">Description</h6>
<div class="w3-container">
<textarea name="desc" class="w3-block w3-border"></textarea></div><br>
<?php if(isset($_REQUEST['post'])) { 
  if(empty($description)) { echo "Description is Required";}
  } ?><br>





<h6 class="w3-left w3-margin-left">Category</h6>
<div class="w3-container">
<select class="w3-select w3-border w3-block" name="c_name">
<option value=" " disabled selected>Choose</option>
<?php 
include 'config.php';
$select_query="SELECT * FROM category";
$select=mysqli_query($connection,$select_query) or die("query Failed");
while($row=mysqli_fetch_row($select)){
  $c_id=$row[0];
  $value=$row[1];

?>
<option value="<?php echo $value; ?>"><?php echo $value; ?></option>

<?php
}
?>


</select></div>
<?php if(isset($_REQUEST['post'])) { 
  if(empty($cat_name)) { echo "Category is Required";}
  } ?><br>



<h6 class="w3-left w3-margin-left">Upload Picture</h6>
<div class="w3-container">
<input type="file" name="image" class="w3-block w3-border w3-button"></div>
<?php if(isset($_REQUEST['post'])) { 
  if(!empty($msg)) { echo "Error file extension";}
  if(empty($img_name)) { echo "Picture is required";}
  if(!empty($over_size)) { echo "Maximum SIze is 2 mb";}
  } ?><br>






<div class="w3-container">
<input type="submit" value="Post" name="post" class="w3-left w3-button w3-hover-red w3-green">
</div><br>


</form>

</div>

<br><r>



<script>

//document.getElementById("#user").
</script>

</body>

</html>
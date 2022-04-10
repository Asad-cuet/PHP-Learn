<?php
include 'header.php';

  if(!isset($_SESSION['username'])) {   // If try to login by url
    header("location:logout.php");
  }
?>

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
if(!empty($_REQUEST['id'])) {
$rec_id=$_REQUEST['id'];
$img=$_REQUEST['img'];
include 'config.php';
$select_query="SELECT * FROM post WHERE Post_id=$rec_id";
$select=mysqli_query($connection,$select_query);
while($row=mysqli_fetch_row($select)) {
      $id=$row[0];
      $title=$row[1];
      $desc=$row[2];
      $category=$row[3];
      $date=$row[4];
      $author=$row[5];
}
}

//Updating Data
if(isset($_REQUEST['update'])) {

    include 'config.php';
    $id=$_REQUEST['pass_id'];
    $title_c=ucfirst(mysqli_real_escape_string($connection,$_POST['title']));
    $desc_c=ucfirst(mysqli_real_escape_string($connection,$_POST['desc']));
    if(!empty($_POST['c_name'])) {$c_name_c=mysqli_real_escape_string($connection,$_POST['c_name']);}
    if(!empty($_FILES['image'])) {$img=$_FILES['image'];$img_name=$img['name'];} 
    $img_before=$_REQUEST['pass_img'];
      // If all inputed


      if(!empty($img_name)) {   // If new uploades
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
       unlink("uploads/$img_before");
       // For remove=unlink("location/filename");

      
      $update_query="UPDATE post SET Title_name='$title_c',Description='$desc_c',Category_name='$c_name_c',Image='$img_name_c' WHERE Post_id=$id";
      $update=mysqli_query($connection,$update_query) or die("Update Failed");
      if($update==true) {
          header("location:post.php");
      } 
      }  else { $size="abc";}

       }  else { $ext="abc";}

       } else { // if not uploaded
      $update_query="UPDATE post SET Title_name='$title_c',Description='$desc_c',Category_name='$c_name_c' WHERE Post_id=$id";
      $update=mysqli_query($connection,$update_query) or die("Update Failed");
      if($update==true) {
          header("location:post.php");
       }

      }


}


?>


<div class="w3-container"><h3>Update</h3></div>



<div class="my-h-center w3-white">
<form class=" w3-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?pass_id=<?php echo $id; ?>&pass_img=<?php echo $img; ?>" autocomplete="off" enctype="multipart/form-data"><br>




<h6 class="w3-left w3-margin-left">Title</h6>
<div class="w3-container">
<input type="text" name="title" class="w3-block w3-border" value="<?php echo $title;?>"></div>







<h6 class="w3-left w3-margin-left">Description</h6>
<div class="w3-container">
<textarea name="desc" class="w3-block w3-border"><?php echo $desc; ?></textarea></div><br>






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
<option value="<?php echo $value; ?>" <?php if($category==$value) {echo "selected";}?>><?php echo $value; ?></option>

<?php
}
?>


</select></div>




<h6 class="w3-left w3-margin-left">Upload Picture</h6>
<div class="w3-container">
<input type="file" name="image" class="w3-block w3-border w3-button" value="<?php echo $img; ?>"></div>
<?php if(isset($_REQUEST['post'])) { 
  if(!empty($ext)) { echo "Error file extension";}
  if(!empty($size)) { echo "Maximum SIze is 2 mb";}
  } ?><br>





<div class="w3-container">
<input type="submit" value="Update" name="update" class="w3-left w3-button w3-hover-red w3-green">
</div><br>


</form>

</div>



</body>
</html>
<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$id=$_REQUEST['id'];
$img=$_FILES['image'];
$img_name=$img['name'];
$img_tmp_name=$img['tmp_name'];
$rec_img_name=$_REQUEST['pic_name'];


if(!empty($img_name)) {
    $destin="uploads/";
    $img_name=uniqid().$img['name'];
    move_uploaded_file($img_tmp_name,$destin.$img_name);  # move_upload_file(file tmp_name,destination);
    $update_query="UPDATE user_info3 SET Profile_Picture='$img_name',First_name='$fname',Last_name='$lname',Email='$email' WHERE ID=$id";
    echo "<br>uploaded";
    unlink("uploads/$rec_img_name");
} else {
    $update_query="UPDATE user_info3 SET First_name='$fname',Last_name='$lname',Email='$email' WHERE ID=$id";
}


$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

$update=mysqli_query($connection,$update_query);

if($update) {
   header("location:table_update.php?updated");
}

?>
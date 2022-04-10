<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$img=$_FILES['image'];
$img_name=$img['name'];
$img_tmp_name=$img['tmp_name'];


if(!empty($img_name)) {
    $destin="uploads/";
    $img_name=uniqid().$img['name'];
    move_uploaded_file($img_tmp_name,$destin.$img_name);  # move_upload_file(file tmp_name,destination);
    // For remove=unlink("location/filename");
    echo "<br>uploaded";
} else {
    $img_name="profile.png";
    echo "<br>Default pic uploaded";
}
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "<br>Database Connected";
}
$query="INSERT INTO user_info3(Profile_Picture,First_name,Last_name,Email) VALUES ('$img_name','$fname','$lname','$email');";

$result=mysqli_query($connection,$query);
if($result) {
    echo "<br>Form submission succesful";
} 
?>
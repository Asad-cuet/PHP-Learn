<!DOCTYPE html>
<html lang="en">
<script src="W3.JS.js"></script>  <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">  <!-- W3.CSS library -->
<head>
    <meta charset="UTF-8">
    <me
    ta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
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
        
        
    } else {
        $img_name="default/profile.png";
    
    }


    $connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

    $insert="INSERT INTO user_info3(Profile_Picture,First_name,Last_name,Email) VALUES ('$img_name','$fname','$lname','$email');";
    if($fname && $email && filter_var($email, FILTER_VALIDATE_EMAIL)) {$send=mysqli_query($connection,$insert);}
    }

?>
<div class="w3-panel w3-sans-serif">
<div class="w3-container w3-center w3-indigo w3-card-4 w3-wide"><h1>Form Title</h1></div>

    <form class="w3-teal w3-card-4"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

<div class="w3-panel>"><div class="w3-container">
    <h3>First Name:</h3>
    <input type="text" name="fname" class="w3-block w3-border-black "><br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(empty($fname)) { echo "<h4 style='color:indigo;'> First Name is Required</h4>";}
    }?></div></div>

<div class="w3-panel>"><div class="w3-container">
    <h3>Last Name:</h3>
    <input type="text" name="lname" class="w3-block w3-border-black"><br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        
    }?></div></div>


<div class="w3-panel>"><div class="w3-container">
    <h3>Email:</h3>
    <input type="text" name="email" class="w3-block w3-border-black"><br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(empty($email)) { echo "<h4 style='color:indigo;'> Email is Required</h4>";}
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            $emailErr = "<h4 style='color:indigo;'>Invalid email format</h4>";
             echo $emailErr;
          }
    }?></div></div>


<div class="w3-panel>"><div class="w3-container">
    <h3>Upload Picture:</h3>
    <input type="file" name="image" class="w3-button w3-teal"></div></div><br>

    <div class="w3-panel"><div class="w3-container">
    <h4><input type="submit" class="w3-button w3-hover-red w3-green"></h4></div></div>
    </form>
    </div>
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
    if ($fname && $email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h3>Data Inserted</h3>";
    } 
}
    ?> 


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<script src="W3.JS.js"></script>  <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">  <!-- W3.CSS library -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$connection= mysqli_connect('localhost','asad','','user3');
$rec_id=$_REQUEST['id'];
$rec_img_name=$_REQUEST['pic_name'];

$select_query="SELECT * FROM user_info3 WHERE ID=$rec_id";
$select=mysqli_query($connection,$select_query);
while($row=mysqli_fetch_row($select)) {
  $id=$row[0];
  $img_name=$row[1];
  $fname=$row[2]; $lname=$row[3];
  $email=$row[4];}

 //if(isset($_REQUEST['submit'])) {

 //} 
?>
<div class="w3-panel">
    <form method="post" action="update.php?id=<?php echo $rec_id;?>&pic_name=<?php echo $img_name; ?>" enctype="multipart/form-data">
    <div class="w3-panel>"><div class="w3-container">
    <h3>Change Profile Picture:</h3><input type="file" name="image"></div></div><br>
    <div class="w3-panel>"><div class="w3-container">
    <h3>First Name:</h3><input type="text" value="<?php echo $fname; ?>" name="fname" class="w3-block"></div></div><br>

    <div class="w3-panel>"><div class="w3-container">
    <h3>Last Name:</h3><input type="text" value="<?php echo $lname; ?>" name="lname" class="w3-block"></div></div><br>

    <div class="w3-panel>"><div class="w3-container">
    <h3>Email:</h3><input type="text" value="<?php echo $email; ?>" name="email" class="w3-block"></div></div><br>

    <div class="w3-panel>"><div class="w3-container">
    <input type="submit" value="Upload" class="w3-button w3-hover-red w3-green"></div></div><br>

    </form>
    </div>
</body>
</html>
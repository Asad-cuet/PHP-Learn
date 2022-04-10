<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$connection= mysqli_connect('localhost','asad','','user');
$rec_id=$_REQUEST['id'];

$select_query="SELECT * FROM user_info WHERE ID=$rec_id";
$select=mysqli_query($connection,$select_query);
while($row=mysqli_fetch_row($select)) {
  $id=$row[0];
  $fname=$row[2]; $lname=$row[3];
  $email=$row[4];}

 //if(isset($_REQUEST['submit'])) {

 //} 
?>
    <form method="post" action="update.php?id=<?php echo $rec_id;?>">
    First Name:<input type="text" value="<?php echo $fname; ?>" name="fname">
    Last Name:<input type="text" value="<?php echo $lname; ?>" name="lname">
    Email:<input type="text" value="<?php echo $email; ?>" name="email">
    <input type="submit" value="Upload">
    </form>
</body>
</html>
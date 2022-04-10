<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="W3.JS.js"></script>  <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">  <!-- W3.CSS library -->



<head>

<style>

</style>
</head>
<body>
<?php
$connection= mysqli_connect('localhost','asad','','user');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$query="SELECT * FROM user_info";
$table=mysqli_query($connection,$query);
if($table) {
    echo "<br>table connected";
}
if(isset($_REQUEST['deleted'])) { echo "<h3>Data Deleted</h3>";}
if(isset($_REQUEST['updated'])) { echo "<h3>Data Updated</h3>";}
?>
<table class="w3-table-all">
<tr>
<th>Serial No.</th>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>
<?php
$serial=0;
while($row=mysqli_fetch_row($table)) {
    $id=$row[0];
    $name=$row[2]." ".$row[3];
    $email=$row[4];
    $serial++;
?>
<tr>
<td><?php echo $serial;  ?></td>
<td><?php echo $id;  ?></td>
<td><?php echo $name;  ?></td>
<td><?php echo $email;  ?></td>
<td><a href="update_form.php?id=<?php echo $id; ?>">Edit</a> || 
<a href="delete.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure?')">Delete</a></td>
</tr>


<?php
}

?>
</table>

</body>

</html>


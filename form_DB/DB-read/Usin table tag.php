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
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$query="SELECT * FROM user_info3";
$table=mysqli_query($connection,$query);
if($table) {
    echo "<br>table connected";
}
?>
<table class="w3-table-all">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>
<?php
while($row=mysqli_fetch_row($table)) {
    $id=$row[0];
    $name=$row[1]." ".$row[2];
    $email=$row[3];
?>
<tr>
<td><?php echo $id;  ?></td>
<td><?php echo $name;  ?></td>
<td><?php echo $email;  ?></td>
</tr>


<?php
}

?>
</table>

</body>

</html>


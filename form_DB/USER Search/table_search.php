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
<form mathod="post">
<input type="text" placeholder="Search by ID/Name/Email" name="search_id">
<input type="submit" name="search" class="w3-button w3-red">
</form>
<?php
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if(isset($_REQUEST['search'])) {
    $in_id=$_REQUEST['search_id'];
$query="SELECT * FROM user_info3 WHERE ID LIKE '%$in_id%' OR Email LIKE '%$in_id%'
               OR First_name LIKE '%$in_id%' OR Last_name LIKE '%$in_id%'";
$table=mysqli_query($connection,$query);

?> 
<table class="w3-table-all">
<tr>
<th>Serial No.</th>
<th>ID</th>
<th>Name</th>
<th>Email</th>

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

</tr>


<?php
}
}

?>
</table>

</body>

</html>


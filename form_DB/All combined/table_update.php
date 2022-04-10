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
    echo " Database Connected";
}
$query="SELECT * FROM user_info3";
$table=mysqli_query($connection,$query);
if($table) {
    echo "<br>table connected";
}
if(isset($_REQUEST['deleted'])) { echo "<h3>Data Deleted</h3>";}
if(isset($_REQUEST['updated'])) { echo "<h3>Data Updated</h3>";}
?>




<h3 class="w3-center">Search:<input type="text" oninput="w3.filterHTML('#id01','.item',this.value)"></h3>


<table class="w3-table-all w3-sans-serif" id="id01">
<tr class="w3-dark-gray">
<th>Serial No.</th>
<th>ID</th>
<th>Profile Picture</th>
<th>Name</th>
<th>Email</th>
<th class="w3-center">Action</th>
</tr>


<?php
$serial=0;
while($row=mysqli_fetch_row($table)) {
    $id=$row[0];
    $img_name=$row[1];
    $name=$row[2]." ".$row[3];
    $email=$row[4];
    $serial++;
?>


<tr class="item w3-hover-cyan">
<td><?php echo $serial;  ?></td>
<td><?php echo $id;  ?></td>
<td><img style="width:40px" src="uploads/<?php echo $img_name;  ?>"></td>
<td><?php echo $name;  ?></td>
<td><?php echo $email;  ?></td>
<td class="w3-center"><a class="w3-button w3-hover-dark-gray" href="update_form.php?id=<?php echo $id; ?>&pic_name=<?php echo $img_name; ?>">Edit</a> || 
<a class="w3-button" href="delete.php?id=<?php echo $id;?>&pic_name=<?php echo $img_name; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
</tr>


<?php
}

?>
</table>

</body>

</html>


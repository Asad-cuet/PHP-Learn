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

$query="SELECT * FROM user_info3";
$table=mysqli_query($connection,$query);



?> 
<form method="post">
<table class="w3-table-all w3-sans-serif">
<tr>
<th>Serial No.</th>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>
<input type="submit"  name="delete_m_data" class="w3-button w3-green w3-hover-red">
</th>
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
<td>
<input type="checkbox" name="check_data[]" value="<?php  echo $id; ?>">

</td>

</tr>


<?php
}
if(isset($_REQUEST['delete_m_data'])) {  ///not working
    echo "<h1>rrrrr</h1>";
    $check_data=$_REQUEST['check_data'];
    $id_seper=implode(",",$check_data);
    $query_M="DELETE FROM user_info3 WHERE ID in ($id_seper)";
    $table=mysqli_query($connection,$query_M);
    if($table) { echo "dffghfhghg";}
}

?>
</table>
</form>
</body>

</html>


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
<div class="w3-panel w3-center"><input type="text" placeholder="Type Message to Email" name="msg"></div>
<table class="w3-table-all w3-sans-serif">
<tr>
<th>Serial No.</th>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>
<input type="submit"  name="delete_m_data" value="Send Mail" class="w3-button w3-green w3-hover-red">
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
if(isset($_REQUEST['delete_m_data'])) {  ///not work
    
    $check_data=$_REQUEST['check_data'];
     $id_seper=implode(',',$check_data);
    $query_M="SELECT * FROM user_info3 WHERE ID in ($id_seper)";
    $table2=mysqli_query($connection,$query_M);
    $subject="Test Mail";
    $body=$_REQUEST['msg'];
    $header="From:mytest7733@gmail.com";

    if($table2) {
        while($row_N=mysqli_fetch_row($table2)) {
            $to_mail=$row_N[4];
         if(mail($to_mail,$subject,$body,$header)) {
              echo "<br><h3>Mail sent to ".$to_mail."<h3><br>";
            }
        }
    }

}

?>
</table>
</form>
</body>

</html>


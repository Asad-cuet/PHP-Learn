<?php
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$rec_id=$_REQUEST['id'];
$delete_query="DELETE FROM user_info3 WHERE id=$rec_id;";
$delete=mysqli_query($connection,$delete_query);
if($delete) {
    header("location:table.php?deleted");
}

?>
<?php
$connection= mysqli_connect('localhost','asad','','user');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$rec_id=$_REQUEST['id'];
$delete_query="DELETE FROM user_info WHERE id=$rec_id;";
$delete=mysqli_query($connection,$delete_query);
if($delete) {
    header("location:table_update.php?deleted");
}

?>
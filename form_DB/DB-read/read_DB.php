<?php
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

if ($connection) {
    echo "Connected";
}
$query="SELECT * FROM user_info3";
$result=mysqli_query($connection,$query);
if($result) {
    echo "<br>table connected";
}
while($row=mysqli_fetch_row($result)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
while($row=mysqli_fetch_row($result)) {
    echo "<pre>";
    echo $row[0];
    echo "</pre>";
}
?>
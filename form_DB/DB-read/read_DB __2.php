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

while($row=mysqli_fetch_row($table)) {
    $id=$row[0];
    $name=$row[1]." ".$row[2];
    $email=$row[3];
    echo "<pre>".$id."</pre>";
    echo "<pre>".$name."</pre>";
    echo "<pre>".$email."</pre>";
    
}
$count=mysqli_num_rows($table);
echo "Number of Rows in table is ".$count;
?>
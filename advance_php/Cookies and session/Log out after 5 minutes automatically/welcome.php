<?php
session_start();
if($_SESSION['user_name']==TRUE) {
    if(time()-$_SESSION['current_timestamp']>10) {
        header("location:logout.php");
    } else {
echo "Welcome<br>";
$user_name=$_SESSION['user_name'];
echo $user_name;
    }
echo "<br>";
?>
<a href="logout.php">Log Out</a>

<?php
} else {
    header("location:session_form.php");
}

?>
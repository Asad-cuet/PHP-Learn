<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <oform method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit">
    </form>

    <?php

if($_SERVER["REQUEST_METHOD"]=="POST") {
    echo "hi";
    $db_username="asad";
$db_pass="12345";
$user_input=$_REQUEST['username'];
$pass_nput=$_REQUEST['password'];
if($user_input==$db_username) {
    echo "name";
    if($pass_input==$db_pass) {
        echo "
        dfghj";
    }
 }
}
?>
</body>
</html>
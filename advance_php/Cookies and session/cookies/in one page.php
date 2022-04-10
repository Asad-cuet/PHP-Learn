<?php
$name="user";
$value="Asad";
setcookie($name,$value,time()+15);
if(isset($_COOKIE['user'])) {
    echo "Your Name is ".$_COOKIE['user'];
} else {
    echo"Time over";
}

?>
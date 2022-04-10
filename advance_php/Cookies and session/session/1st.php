<?php

/* session hold value for some definite time */
session_start(); # must add it

$_SESSION['user']="Asad";

function session($name,$value)
{
      $_SESSION[$name]=$value;
}

?>
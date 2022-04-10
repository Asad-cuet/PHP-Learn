<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $date=date("Y.m.d");
    echo $date;

    #Time
    date_default_timezone_set(""); #set time zone
    $time=date("h:i:s");
    echo "<br>".$time;
    #mktime(hour, minute, second, month, day, year)
    $d=mktime(2, 25, 33, 12, 15, 1999);
    echo "<br>my birthday is on ".date("Y-m-d",$d);
    ?>
</body>
</html>
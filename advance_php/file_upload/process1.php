<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre><?php
$file=$_FILES['user'];
echo var_dump($file);
?></pre>

<?php

echo $file["name"];  #$file variable is an array
?>
<img src="$file['name']">
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=5; #it is global variable
    function myTest() {
        global $x;  # Accessing global variable.
        echo $x;
    }
    
    myTest();
    function myTest2() {
        $y=10;  #its Local variale
        echo "<br>".$y;
    }
    myTest2();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("PIE","3.1416");  #Defining..variable can change..but constant value can't change
                             
    echo PIE;
  #Constant is Global.But no need to access
    function myTest() {
        
        echo "<h1 style='color:red;'>".PIE."</h1>";
    }
    myTest();

    #Array constant
    define("fruit",["mango","banana","Orange"]);
    echo fruit[1];

?>
</body>
</html>
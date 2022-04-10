<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $x=1234;
   $y=123.01;
   var_dump(is_int($x));
   echo"<br>";
   var_dump(is_int($y));
  #Using Condition
   if(is_int($x)) {
       echo "<br>It is integer";
   }
   if(is_float($y)) {    #Checking Float nummber
       echo "<br>It is Float Number";
   }
   if(is_numeric($y)) {    #Checking Numeric nummber
       echo "<br>It is Numeric Number";      /*The numbering system
        consists of ten different digits: 0, 1, 2, 3, 4, 5
        , 6, 7, 8, and 9. If a value is an alphanume
        ric, it contains letters and numbers.*/
   }


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   function myTest1($x) {
     $y=$x+10;
     
   }
  myTest1(10); #No output.Because php doesn't return value automitically.

   function myTest2($a) {
     $b=$a+10;
     return $b;
   }
  myTest2(5);
  echo $b; #No output.Because php doesn't return value by return.
   function myTest3($p) {
     $q=$p+10;
     echo $q;
   }
  myTest3(5);  #it works

  function myTest4($m) {
    $n=$m+10;
    return $n; #without it,no output
  }
 echo "<br>".myTest4(15); #Now return works
function add_five(&$value) { #if input is a variable value
    return $value+=5;
}

$num=10;
echo "<br>".add_five($num);
?>
</body>
</html>
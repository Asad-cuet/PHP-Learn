<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x="Asad";
    echo strlen($x); #return the length of string
    echo "<br>";
    echo str_word_count($x); # count word

    echo "<br>".strrev($x);   #reverse string

    echo "<br>".str_replace("Asad","Hamzah",$x);  # replace variable
    echo "<br>".$x;  #Doesn't change permanantly

    $p=pi(); #returns Pie value
    echo "<br>".$p;

    #generating random number
    $r=rand();
    echo "<br>".$r;
    #range
    $rr=rand(10,100);
    echo "<br>".$rr;

    echo strtolower("Hello WORLD."); # conver to lower case
    echo strtoupper("Hello WORLD."); # conver to upper case

    $str = "Hello world!";
    echo convert_uuencode($str); # convert to unicode

    echo ucfirst("hello world!");  #Convert the first character of "hello" to uppercase:

    echo lcfirst("Hello world!");  #Convert the first character of "Hello" to lowercase:
    ?>
</body>
</html>
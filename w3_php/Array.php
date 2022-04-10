<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colors=array("red","green","Yellow");
    echo $colors[0];
    echo "<br>".count($colors);
    #loop through array
    for($x=0;$x<count($colors);$x++) {
        echo "<br>".$colors[$x];
    }

    #Two dimentional array
    $name=array(
        array("Asad","Bio-Medical Engineering","CUET"),
        array("Shanto","Agriculture","SBAU"),
        array("Rahat","Law","DU"),
        array("Ridoy","EEE","IUVAT"),
    );
    echo "<br>Hi.I am ".$name[0][0].".Studing ".$name[0][1]." at ".$name[0][2];
    echo "<br>Hi.I am ".$name[1][0].".Studing ".$name[1][1]." at ".$name[1][2];
    echo "<br>Hi.I am ".$name[2][0].".Studing ".$name[2][1]." at ".$name[2][2];
    echo "<br>Hi.I am ".$name[3][0].".Studing ".$name[3][1]." at ".$name[3][2];

    #for loop at 2D array
    echo "<h3>Using Loop</h3>";
    for ($x=0;$x<count($name);$x++) {
        echo "<br>Hi.I am ".$name[$x][0].".Studing ".$name[$x][1]." at ".$name[$x][2];   
    }
    #for loop at 2D array
    echo "<h3>Again for loop</h3>";
    for($row=0;$row<count($name);$row++) {
        echo "<br>Row number".$row+1;
        echo"<ul>";
        for($col=0;$col<3;$col++) {
            echo"<br><li>".$name[$row][$col]."</li>";

        }
        echo"</ul>";

    }


    /* Sorting Array
    sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
   */
?>
</body>
</html>
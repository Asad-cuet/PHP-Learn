<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post" action="insert.php">
    First Name:<input type="text" name="fname"><br>
    Last Name:<input type="text" name="lname"><br>
    Email:<input type="text" name="email"><br>
    <input type="submit">
    </form>
    <?php
    if (isset($_REQUEST['msg'])) {
    echo "<h3>Data Inserted</h3>";
    }
    ?>   
</body>
</html>
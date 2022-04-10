<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" autocomplete="off" enctype="multipart/form-data">
 <input type="file" name="image">
 <input type="submit" name="post" value="upload">   
</form>
</body>
</html>

<?php 
if(isset($_REQUEST['post']))
{
    echo $name=input_pdf("uploads/","image");
    echo "Asad";
}


    ?>


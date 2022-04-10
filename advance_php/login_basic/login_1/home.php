<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name:<input type="text" name="user"><br>
    Password:<input type="password" name="pass"><br>
    <input type="submit" value="login">
    </form>
    <?php
  if($_SERVER["REQUEST_METHOD"]=="POST") {
      $int_name="asad";
      $int_pass=12345;
      $name=$_REQUEST['user'];
      $pass=$_REQUEST['pass'];
      if($name==$int_name && $pass==$int_pass) {
          header("location:pass.php");
      } else {
          echo "Log in failed";
      }
  }

?>
</body>
</html>
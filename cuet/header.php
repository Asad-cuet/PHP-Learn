<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8"> <!-- For Bangla Font -->
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="W3.JS.js"></script>  <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">  <!-- W3.CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Icon Library -->
<script src="https://www.w3schools.com/appml/2.0.3/appml.js"></script>  <!-- AppMl Link-->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!-- Jquery Library -->
   <!-- Bootstrap 4  Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body, html {
      height: 100%;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .bg-img {
      /* The image used */
      background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("cuet.jpg");
    
      min-height: 480px;
    
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .my-dark {
      background-color:rgba(0, 0, 0, 0.5);
    }
    
    </style>
<script>   //jquery goes here
$(document).ready(function(){
  $("selector").event(function(){ //event=click,dbclick,mouseenter,mouseleave,hover,focus[click on],blur[click outside].
    $("selector").action(interval); //hide(),show(),toggle(),fadeIn(),fadeOut(),fadeToggle(),addClass(""),removeClass(""),css("property","value")
  });
});
</script>  
</head>
<body class="w3-sans-serif">




<div class="bg-img">
  <div class="w3-text-white">
    <div class="w3-bar w3-large" style="background-color:rgba(0, 0, 0, 0.5);position:fixed">
          <div class="w3-bar-item w3-button w3-white w3-wide">CUET</div>
          <div class="w3-bar-item w3-button w3-right"><i class="fa fa-align-justify"></i></div>
          <div class="w3-bar-item w3-button w3-right w3-hide-small">MORE <i class="fa fa-angle-double-down"></i></div>
          <div class="w3-bar-item w3-button w3-right w3-hide-small">CONTACT</div>
          <div class="w3-bar-item w3-button w3-right w3-hide-small">ABOUT CUET</div>
          <div class="w3-bar-item w3-button w3-right w3-hide-small">HOME</div>
          
          
    </div>
    <div style="height:43px"></div>
    <div class="w3-container">
          <div class="w3-panel">
          <input type="text" style="background-color:rgba(0, 0, 0, 0.5);" class="w3-mobile w3-border w3-border-white w3-xlarge w3-text-white" placeholder="Search..">
          <br></div>
          <div class="w3-panel">
          <input type="submit" value="Search" class="w3-button w3-border">
          </div>
          
                <div class="w3-bar w3-center">
                      <a class="w3-bar-item w3-button w3-border w3-border-white w3-margin" href="#">MESSAGE FROM VC</a>
                      <a class="w3-bar-item w3-button w3-border w3-border-white w3-margin" href="#">All E-JOURNALS</a>
                      <a class="w3-bar-item w3-button w3-border w3-border-white w3-margin" href="#">ONLINE COURSE REGISTRATION</a>
                </div>
          

      </div>
          
    </div>

</div>




</body>
</html>
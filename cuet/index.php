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
<?php include 'header.php'; ?>
<div class="w3-text-black"> 
<div class="w3-row w3-center w3-padding-32 w3-xlarge">
      <a class="w3-quarter w3-button">About Us</a>
      <a class="w3-quarter w3-button">Administration</a>
      <a class="w3-quarter w3-button">Admission</a>
      <a class="w3-quarter w3-button">Apointments</a>
</div>
</div>


<div class="w3-center w3-container w3-text-white" style="background-color:#242C42;">
      <h2>SOME IMPORTANT FACTS ABOUT US</h2>
      <div class="w3-row w3-center w3-padding-32 w3-large">
            <div class="w3-quarter">
                 <h2>171+</h2>
                 <p>Acres Area</p>
            </div>
            <div class="w3-quarter">
                 <h2>15</h2>
                 <p>Departments</p>
            </div>
            <div class="w3-quarter">
                 <h2>200+</h2>
                 <p>Faculty Members</p>
            </div>
            <div class="w3-quarter">
                 <h2>4500+</h2>
                 <p>Students</p>
            </div>


      </div>
</div>





</body>
</html>
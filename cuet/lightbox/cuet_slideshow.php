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

 <!-- Slide start here -->
 <center>

<div class="w3-display-container w3-teal w3-card-4" style="width:100%;max-width:500px">
<img id="my-slide" src="lightbox/cuet 2.jpg" style="width:100%;max-width:600px" class="w3-border w3-border-black">
<img id="my-slide" src="lightbox/cuet 3.jpg" style="width:100%;max-width:600px" class="w3-animate-left w3-border w3-border-black">
<img id="my-slide" src="lightbox/cuet 2.jpg" style="width:100%;max-width:600px" class="w3-animate-right w3-border w3-border-black">
<img id="my-slide" src="lightbox/cuet 5.jpg" style="width:100%;max-width:600px" class="w3-border w3-border-black">
<button onclick="myShow.previous()" class="w3-display-left w3-button w3-black"><i class="fa fa-arrow-left"></i></button>  <!-- Slide button -->
<button onclick="myShow.next()" class="w3-display-right w3-button w3-black"><i class="fa fa-arrow-right"></i></button>
</div>

</center>
<script>
myShow=w3.slideshow("#my-slide",1500);  //for slide show
</script>
 <!-- Slide ends here -->

</body>
</html>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
.color1 { background-color:#0F5656; }
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
</style>
<script>   //jquery goes here
  // 2nd query start

  $(document).ready(function(){
  $("#drop-bar2").click(function(){
    $("#drop-content2").toggle(500);
    $("#up-btn2").removeClass("fa fa-angle-double-down");
    $("#up-btn2").addClass("fa fa-angle-double-up");
    $("#drop-bar2").click(function(){
	   $("#up-btn2").removeClass("fa fa-angle-double-up");
	   $("#up-btn2").addClass("fa fa-angle-double-down");
    });
  });
  });


  $(document).ready(function(){
  $("#remove-btn2").click(function(){
    $("#side-content2").hide(500);
  });
});






// 2nd query end


</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">

















<!-- 2ns Responsive bar start here-->
<!-- Leptop Bar-->

<div class="w3-bar  w3-text-white" style="background-color:#6088A1;position:fixed;top:0px;">   
<div class="w3-bar-item  w3-button    w3-large " id="side-btn" onclick="w3.show('#side-content2')"><span class="fa fa-align-justify"></span></div>
<a href="index.php" id="index" class="w3-bar-item  w3-button  w3-hide-small  w3-large"><i class="fa fa-home"></i>Home</a>
<a href="book_list.php" id="book_list" class="w3-bar-item w3-button w3-hide-small   w3-large">Search Book</a>
<?php
session_start();
$count=0;
if(isset($_SESSION['cart'])) {
  $count=count($_SESSION['cart']);
}

?>

<a href="my-cart.php" id="view_cart" class="w3-bar-item w3-button w3-right  w3-large"><i class="fas fa-cart-plus"></i> Your Cart(<?php echo $count; ?>)</a>
<a href="footer.php" id="contact" class="w3-bar-item  w3-button w3-hide-small  w3-right  w3-large">Contact</a>


</div>



<div class="w3-bar w3-hide-small w3-padding" style="margin-top:43px;background-color:#E8F2D7;">
<div class="w3-bar-item"><img src="logo.jpg" style="width:190px;"></div>
<div class="w3-bar-item w3-right w3-wide my-mobile w3-text-darkgray"><h3>We are here to provide you best survice</h3></div>
</div>


<div class=" w3-margin-0 w3-hide-large w3-hide-medium " style="margin-top:43px;position:relaive;"><img src="logo.jpg" style="width:100%;"></div>






<!-- Sidebar -->  
<div class="w3-bar-block w3-light-blue w3-animate-left" id="side-content2" style="display:none;position:fixed;top:0px;height:100%;width:190px;">   
<div class="w3-row w3-border">
<a href="index.php" class="w3-col w3-blue w3-button w3-large w3-left-align" style="width:70%"><i class="fa fa-home"></i>Home</a>
<div class="w3-col w3-button w3-large w3-blue w3-center w3-border-left" style="width:30%" id="remove-btn2"><i class="fa fa-remove"></i></div>
</div>
<a href="book_list.php" id="book_list" class="w3-blue w3-border w3-bar-item w3-button w3-large">Book List</a>
<a href="footer.php" class="w3-bar-item w3-button w3-large w3-blue w3-border">Contact</a>

<div class="w3-large w3-dropdown-click w3-blue w3-border"  id="drop-bar2"><button  class="w3-button">About<i id="up-btn2" class="fa fa-angle-double-down w3-button"></i></button>
<div class="w3-dropdown-content w3-bar-block w3-cyan w3-card-4" id="drop-content2">
<a href="about_us.php" class="w3-bar-item w3-button w3-border">About Us</a>
<a href="developer.php" class="w3-bar-item w3-button w3-border">About Developer</a>
</div>
</div>









</div>









<!--2nd Responsive bar end here-->


</body>
</html>
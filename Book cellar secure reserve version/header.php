<?php include 'function.php'; ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" type="image/jpg" sizes="16x16" href="Book cellar bd icon.jpg"> <!-- favicon -->
<style>

.color1 { background-color:#0F5656; }
.search { background-color:#F1F1F1}
.inback {  background-color:#27465F;  }
div .inback {  background-color:#27465F;  }


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
  $("#drop-bar3").click(function(){
    $("#drop-content3").toggle(500);
    $("#up-btn3").removeClass("fa fa-angle-double-down");
    $("#up-btn3").addClass("fa fa-angle-double-up");
    $("#drop-bar3").click(function(){
	   $("#up-btn3").removeClass("fa fa-angle-double-up");
	   $("#up-btn3").addClass("fa fa-angle-double-down");
    });
  });
  });


  $(document).ready(function(){
/*  $("#side-btn").click(function(){
    $("#side-content2").css("background-color","rgba(0,0,0,0.7)");
  });      */
      
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

<div class="w3-bar w3-text-white w3-padding" style="background-color:#6088A1;position:fixed;top:0px;">   
<div class="w3-bar-item  w3-button w3-large w3-round" id="side-btn" onclick="w3.show('#side-content2')"><span class="fa fa-align-justify"></span></div>
<a href="index.php" id="index" class="w3-bar-item w3-button w3-hide-small w3-large w3-round"><i class="fa fa-home"></i>Home</a>
<a href="category_list.php" id="book_list" class="w3-bar-item w3-button w3-large w3-round w3-hide-small">Category List</a>
<a href="trend.php" id="trend" class="w3-bar-item w3-button w3-large w3-round w3-hide-small w3-hide-medium">Trending Book</a>
<a href="free.php" id="free" class="w3-bar-item w3-button w3-large w3-round w3-hide-small w3-hide-medium">Free Delivery Book</a>
<a href="category_list.php" class="w3-bar-item w3-button w3-large w3-round w3-border w3-border-white w3-hide-large">Search</a>
<?php

$count=0;
if(isset($_SESSION['cart'])) {
  $count=count($_SESSION['cart']);
}

?>

<a href="my-cart.php" id="view_cart" class="w3-bar-item w3-button w3-right w3-large w3-round" style="background-color:#595282;"><i class="fa fa-cart-plus" style="font-size:22px"></i> (<?php echo $count; ?>)</a>
<a href="contact.php" id="contact" class="w3-bar-item  w3-button w3-hide-small w3-right w3-large w3-round">Contact</a>
    

<form method="POST" action="search.php" class="w3-hide-small w3-hide-medium">
<input type="submit" value="Search" name="search_" class="w3-right w3-bar-item w3-button w3-round w3-large" style="background-color:#2A5A72;">
<input required type="text" name="data" placeholder="Search..." class="search w3-right w3-bar-item w3-border-black w3-round w3-large">
</form>



</div>



<div id="logo" class="w3-bar w3-hide-small w3-padding" style="margin-top:59px;background-color:#AABAC9;">
<div class="w3-bar-item">
    <div class="w3-display-container  w3-center w3-teal w3-card-4" style="width:100%;max-width:300px">
    <img id="my-slide" src="Book Cellar BD.jpg" alt="Book cellar bd" title="Book cellar cover picture" style="width:100%;max-width:600px" class="w3-animate-top w3-border w3-border-black">
    <img id="my-slide" src="Book cellar bd icon.jpg" alt="Book cellar logo" title="Book cellar logo" style="width:100%;max-width:600px" class="w3-animate-left w3-border w3-border-black">
     </div>
</div>
<div class="w3-bar-item w3-right w3-wide my-mobile w3-text-darkgray w3-text-white"><h1>Buy book at cheaper rate</h1></div>
</div>
<script>
myShow=w3.slideshow("#my-slide",3000);  //for slide show
</script>


<div id="logo2" class="w3-margin-0 w3-hide-large w3-hide-medium " style="margin-top:59px;position:relaive;">
    <div class="w3-display-container  w3-center w3-teal" style="width:100%">
    <img id="my-slide2" src="Book cellar bd icon.jpg" alt="Book cellar bd" title="Book cellar logo" style="width:100%;max-width:600px" class="w3-animate-top">
    
    </div>
</div>

<script>
myShow=w3.slideshow("#my-slide2",3000);  //for slide show
</script>




<!-- Sidebar -->  
<div class="w3-bar-block w3-animate-left w3-text-white" id="side-content2" style="display:none;position:fixed;top:0px;height:100%;width:190px;overflow:auto;background-color:#335D7E;">   
<div class="w3-row w3-border back">
<a href="index.php" class="w3-col w3-button w3-large w3-left-align" style="width:70%"><i class="fa fa-home"></i>Home</a>
<div class="w3-col w3-button w3-large w3-center w3-border-left" style="width:30%" id="remove-btn2"><i class="fa fa-remove"></i></div>
</div>
<a href="category_list.php" id="book_list" class="back w3-border w3-bar-item w3-button w3-large">Category List</a>
<a href="book_list.php" id="book_list" class="back w3-border w3-bar-item w3-button w3-large">বই লিস্ট</a>
<a href="trend.php" class="back w3-border w3-bar-item w3-button w3-large">Trending Book</a>
<a href="free.php" class="back w3-border w3-bar-item w3-button w3-large">Free Delivery Book</a>
<a href="contact.php" class="back w3-bar-item w3-button w3-large w3-border">যোগাযোগ</a>



<div class="w3-large w3-dropdown-click w3-border back"  id="drop-bar2"><button  class="w3-button">About<i id="up-btn2" class="fa fa-angle-double-down w3-button"></i></button>
<div class="w3-dropdown-content w3-bar-block w3-text-white w3-card-4" id="drop-content2">
<a href="about_us.php" class="inback w3-bar-item w3-button w3-border">About Us</a>
<a href="developer.php" class="inback w3-bar-item w3-button w3-border">About Developer</a>
</div>
</div>

<div class="w3-large w3-dropdown-click w3-border back"  id="drop-bar3"><button  class="w3-button">Category<i id="up-btn3" class="fa fa-angle-double-down w3-button"></i></button>
<div class="w3-dropdown-content w3-bar-block w3-text-white w3-card-4" id="drop-content3">
<a href="" class="inback w3-bar-item w3-button w3-border">Sub-Category</a>
<a href="" class="inback w3-bar-item w3-button w3-border">Sub-Category</a>
</div>
</div>







</div>








<!--2nd Responsive bar end here-->


</body>
</html>

<?php

?>
<?php
session_start();
ob_start();
include 'header.php';
?>
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <title>Contact</title>
<meta name="description" content="Feel free to contact us">
<meta name="keywords" content="About Book cellar Library,Book cellar,online library,Home delivery libarry">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
</style>
<script>   //jquery goes here
  $(document).ready(function(){
 
 $("#contact").addClass("w3-dark-gray");

});

</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">


<div class="w3-cell-row" style="background-color:">
     <div class="w3-cell">
               <div class="w3-container ">
               <h3>Contact</h3>
               <h5>Founders</h5>
               <p><b>Name:</b>Mujahidul Islam Khalid</p>
               <p><b>Cell:</b>01684604855</p>
               <p><b>Name:</b>Ali Rizvi Omi</p>
               <p><b>Cell:</b>01716886379</p>
               <p><b>Email:</b>bookcellar2020@gmail.com</p>
               <p><b>Library Location:</b>Shoronika,Savar,Dhaka</p>
               
               </div>
     </div>


</div>



<?php
include 'footer.php';
?>
</body>
</html>
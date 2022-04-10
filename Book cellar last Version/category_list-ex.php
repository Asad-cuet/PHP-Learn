<?php
session_start();
ob_start();
include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Category</title>
<meta name="description" content="All book category of Book Cellar book collection.">
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

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #0F8E7A; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #153C4D; 
}

.my-dark-gray 
{
    background-color:rgba(0,0,0,0.6);
}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("#book_list").addClass("w3-dark-gray");+
    
    $("#logo2").hide();
    $("#logo").hide();
 // $("#class_open").click(function(){
   // $("#class910").slideDown();
 // });
});
</script>  
</head>
<body>
    
    <div class="w3-container w3-center" style="margin-top:65px;position:relaive;">
    <form method="POST" action="search.php" class="w3-hide-large">
<input required type="text" name="data" placeholder="Search..." class="w3-border-black w3-round">
<input type="submit" value="Search" name="search_" class="w3-button w3-round w3-dark-gray w3-small">
</form>
</div>
    
    <div class="w3-container ">
<h3>Islamic</h3>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Link</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Link</a>
</div>


<div class="w3-container w3-border-top">
<h3>School</h3>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 1</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 2</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 3</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 4</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 5</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 6</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 7</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Class 8</a>
</div>





<div class="w3-container w3-center">
<h4>Class 9 & 10:</h4>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Science</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Arts</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Commerce</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Common Subject</a>
</div>

<div class="w3-container w3-border-top">
<h3>College</h3>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Science</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Arts</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Commerce</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Common Subject</a>

</div>



<div class="w3-container w3-border-top">
<h3>Admission</h3>
</div>
<div class="w3-container w3-center">
<h4>Science:</h4>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Enginnering</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Medical</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">General</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Agriculture</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Science & Technology</a>

</div>
<div class="w3-container w3-center">
<h4>Others:</h4>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Arts</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Business Studies</a>


</div>




</div>
<div class="w3-container w3-border-top">
<h3>BCS & Job</h3>
</div>
<div class="w3-bar">
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Link</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Link</a>
</div>


<div class="w3-container w3-border-top">
<h3>English</h3>
</div>
<div class="w3-bar">
<a href="category.php?cat_id=34" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Novels</a>
<a href="category.php?cat_id=35" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Non-fiction</a>
<a href="category.php?cat_id=38" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Thriller</a>
<a href="category.php?cat_id=39" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Biography</a>
<a href="category.php?cat_id=40" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Business</a>
<a href="category.php?cat_id=41" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Book Collection</a>
<a href="#" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small">Comics</a>
</div>


</div>




<?php
include 'footer.php';
?>
</body>
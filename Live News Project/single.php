<?php 
include 'config.php';
include 'header.php';
$post_id=$_REQUEST['id'];
$select_query="SELECT * FROM post WHERE Post_id='$post_id'";
$select=mysqli_query($connection,$select_query);


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="W3.JS.js"></script>                               <!-- W3.Js library -->
<link rel="stylesheet" href="W3.CSS.css">                      <!-- W3.CSS library -->
<link rel="stylesheet" href="my-css.css">                       <!-- My CSS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                                             <!-- Icon Library -->

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!-- Jquery Library -->

<style>    /* CSS  */
  .my-h-center { display: block; margin-left: 35%;margin-right: 35%;width:30%}
  .my-h-center2 { display: block; margin-left: auto;margin-right: auto;width:80%}
  .my-white {background-color: #F1F1F1;}
  .my-list li {text-decoration:none;float:left;margin-right:5px;}
  .my-ul{list-style-type:none;padding:0;margin:0}.my-ul li{margin:0;padding:0px 5px;float:left;font-size:12px;}
  .my-desc {text-align:justify;}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("#category").addClass("w3-dark-gray");

});
</script>  


</head>




<body class="my-white w3-sans-serif">     <!-- Body-->

<div class="my-h-center2">   <!-- Horizontally  Centered content  -->
<div class="w3-row w3-center" style="">
 <div class="w3-col w3-white w3-margin-right " style="width:60%;height:auto">  <!-- First Coloumn -->

<?php while($row=mysqli_fetch_row($select)) {
      $post_id=$row[0];
      $title=$row[1];
       $desc=$row[2];
       $c_name=$row[3];
       $date=$row[4];
       $img=$row[6];

    
?>


<div class="w3-container w3-block w3-border-bottom">  <!-- news start -->

<div class=""><img src="admin_2/uploads/<?php echo $img; ?>" class="w3-border" style="width:50%; margin:auto;"></div>
<p class=" w3-text-gray my-desc"><span><?php echo $c_name; ?> </span><span class="fa fa-calendar"></span><span><?php echo $date; ?></span></p>
<h4 class="w3-text-blue my-desc"><?php echo $title; ?></h4>
<p class="my-desc"><?php echo $desc; ?></p> 

</div> <!--  news ends -->

</div> <!-- First Coloumn  End-->





<?php

}

?>
 <div class="w3-col" style="width:30%;height:500px">  <!-- Search Coloumn-->

<div class="w3-block w3-white w3-margin-bottom w3-border w3-border-white">
<h3>Search</h3>
<form method="get" action="search.php">
<div class="w3-container">
<input type="text" name="search" class="">
<input type="submit" class="" value="Search"></div>
</form><br>
</div>




<div class="w3-block w3-white w3-margin-top">
<div class="w3-container w3-block"><h3 class="w3-left">Recent Posts</h3></div>

<div class="w3-container w3-block w3-border-bottom">  <!-- Recent news start -->

<p class="my-desc"><img src="me.jpg" style="width:30%;margin-right:15px;float:left"><h4 class="w3-text-blue my-desc">Hiii</h4>
<p class="my-desc">Lorem ipsum dolor sit amet,</p> </p>

</div> <!-- Recent news ends -->

</div>

</div>




</div>
</div>
</body>

</html>

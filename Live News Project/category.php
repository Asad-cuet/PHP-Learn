<?php

include 'header.php';
 $c_id=$_REQUEST['c_id'];
 $c_name=$c_id;


 include 'config.php'; 
 // pagination area start
 $read_query="SELECT * FROM post WHERE Category_name='$c_name'";
 $result=mysqli_query($connection,$read_query);   // Collecting All row from table

 $limit=3;    // This is Limit variable
 if(mysqli_num_rows($result)) {                     //counting row number
      $total_rec=mysqli_num_rows($result);
      $total_page=ceil($total_rec/$limit);            //counting page number by limit
 } else { $total_page=1;}
 if(isset($_REQUEST['page'])) {                                               //if click on pagination
 $rec_pag=$_REQUEST['page'];               #  Recieving Page number on click
 } else { $rec_pag=1; $s_r=1;}                                                #Default Page Number=1 and serial number=1
 
 $offset= ($rec_pag - 1) * $limit;
 $pag_query="SELECT * FROM post WHERE Category_name='$c_name' ORDER BY Post_id DESC LIMIT {$offset},{$limit}";
 $pagination=mysqli_query($connection,$pag_query);
 // pagination Process close

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
    $("#<?php echo $c_id; ?>").addClass("w3-dark-gray");

});
</script>  


</head>




<body class="my-white w3-sans-serif">     <!-- Body-->



<div class="my-h-center2">   <!-- Horizontally  Centered content  -->
<div class="w3-row w3-center" style="">
 <div class="w3-col w3-white w3-margin-right " style="width:60%;height:auto">  <!-- First Coloumn -->

<?php
while($row=mysqli_fetch_row($pagination)) {
      $post_id=$row[0];
      $title=$row[1];
       $desc=$row[2];
       $c_name=$row[3];
       $date=$row[4];
       $img=$row[6];
   
       
   ?>
<div class="w3-row w3-padding w3-border-bottom">  <!-- News show start-->

      <div class="w3-col w3-red" style="width:30%">  <!-- photot coloumn -->

     <a href="single.php?id=<?php echo $post_id; ?>"> <img src="admin_2/uploads/<?php echo $img; ?>" style="width:100%;"class="w3-border"></a>

      </div>

      <div class="w3-col" style="width:70%">  <!-- Text coloumn -->


      <div class="w3-container  w3-block">
      <a href="single.php?id=<?php echo $post_id; ?>"> <div><h6 class="w3-text-blue  w3-left  w3-block my-desc"><?php echo $title; ?></h6></div></a>
      <div class="w3-left w3-small w3-text-gray"><span><?php echo $c_name; ?>  </span><span class="fa fa-calendar"></span><span><?php echo $date; ?></span></div>
      </div>



      <div class="w3-container w3-left">
      <h9 class=" w3-left my-desc" ><?php echo $desc; ?></h9>
      </div>
      
      </div>
      <a href="single.php?id=<?php echo $post_id; ?>"><p class="w3-right w3-small w3-gray w3-text-white">Read more</p></a>
</div>      <!-- News show ends-->
<?php
}

?>


</div>            <!-- 2nd coloumn-->
 <div class="w3-col" style="width:30%;height:500px">

<div class="w3-block w3-white w3-margin-bottom w3-border w3-border-white">
<h3>Search</h3>
<div class="w3-container">
<form method="get" action="search.php">
<input type="text" name="search" class="">
<input type="submit"  class="" value="Search">
</form></div><br>
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
</div>


<br>


<!-- Pagination Content  start-->
<div class="w3-center">
<div class="w3-bar w3-border w3-border-black w3-teal">
<?php if ($rec_pag>1) { echo "<a class='w3-bar-item w3-button w3-border' href='category.php?page=".($rec_pag-1)."&c_id=".$c_id."'>Previous</a>"; } ?>
<?php for($i=1;$i<=$total_page;$i++){  // For Loop start

 ?>
<a class="w3-bar-item w3-button w3-border" style="background-color:<?php if($i==$rec_pag) { echo "#2A5D78";}?>" href="category.php?page=<?php echo $i; ?>&c_id=<?php echo $c_id; ?>"><?php echo $i; ?></a>

<?php
}
?>
<?php if ($total_page>$rec_pag) { echo "<a class='w3-bar-item w3-button w3-border' href='category.php?page=".($rec_pag+1)."&c_id=".$c_id."''>Next</a>"; } ?>
</div>

<br><br>




</body>


</html>
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
  .my-fixed { position:fixed; right:20px;top:20px;}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("#category").addClass("w3-dark-gray");

});
</script>  


</head>




<body class="my-white w3-sans-serif">     <!-- Body-->


<div class="my-fixed"><a class=" w3-button w3-teal" href="admin_2/index.php">Login</a></div>


<div class="w3-container w3-center w3-wide">
    <a href="index.php" style="text-decoration:none;"> <h1>News</h1> </a>
</div>

<div class="w3-center" >
<div class="w3-bar w3-white">

        <a class="w3-bar-item w3-button" href="index.php" id="world">All</a>
      <?php
    include 'config.php';
    $read_query="SELECT * FROM category";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
    $result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {
   $c_name=$row[1];

    


?>
            <a class="w3-bar-item w3-button" href="category.php?c_id=<?php echo $c_name; ?>" id="<?php echo $c_name; ?>"><?php echo $c_name; ?></a>

<?php  } ?>
</div>
</div>



</body>

</html>
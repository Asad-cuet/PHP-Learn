<?php


include 'header.php';






?>





<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
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
 
 $("#").addClass("w3-dark-gray");

});

</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">




<?php 
if(isset($_REQUEST['added'])) { 

?>
<div class="w3-container w3-blue w3-center w3-text-white">
      <h5>This Item already added.If you want to change quantity of product.Remove it from cart and add again with set quantity number</h5>
</div>
<?php

}
?>



        <!-- Book show start -->
<?php
include 'config.php';
if(isset($_REQUEST['book_id'])) {
$rec_book_id=$_REQUEST['book_id'];
}






$read_query2="SELECT * FROM book_info LEFT JOIN category ON category.Category_id=book_info.Category WHERE Book_id='$rec_book_id'";
$result2=mysqli_query($connection,$read_query2);

while($row=mysqli_fetch_row($result2)) {
    $pic=$row[1];
    $title=$row[2];
    $author=$row[3];
    $published=$row[4];
    $price=$row[5];
    $disc=$row[6];
    $f_price=$row[7];
    $cat_name=$row[12];
    $book_id2=$row[0];





      ?>
<div class="w3-panel">     

 <form method="post" action="cart_pro.php?page=single.php?book_id=<?php echo $book_id2; ?>">
<div class="w3-row w3-border w3-center"  style="background-color:#E7E7FE">
 <div class="w3-col l3 m3 s12  "><div class="w3-panel  "><img src="admin/uploads/<?php echo $pic; ?>" class="w3-center" style="width:100%;"></div></div>
 </div>
 <div class="w3-row "  style="background-color:#E7E7FE">
 <div class="w3-col l11"><div class="w3-container">
                                                 <div class="w3-row">
                                                                      <div class="w3-col l3">
                                                                     <p><b>Title:</b><?php echo $title; ?></p>
                                                                     <p><b>Author:</b><?php echo $author; ?></p>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Published Year:</b><?php echo $published; ?></p>
                                                                     <p><b>Category:</b><?php echo $cat_name; ?></p>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Price:</b><?php echo $price; ?>tk</p>
                                                                     <p><b>Discount:</b><?php echo $disc; ?>%</p>
                                                                     <p><b>Final Price:</b><?php echo $f_price; ?>tk</p>
                                                                     </div>
                                                                     <div class="w3-col  l3">
                                                                     <input type="hidden" name="b_id" value="<?php echo $book_id2; ?>">
                                                                     <input type="hidden" name="b_name" value="<?php echo $title; ?>">
                                                                     <input type="hidden" name="au_name" value="<?php echo $author; ?>">
                                                                     <p><b>Quantity:</b><input type="number" name="quant" class="w3-mobile" value="1" min="1"></p>
                                                                     <input type="hidden" name="price" value="<?php echo $price; ?>">
                                                                     <input type="hidden" name="disc" value="<?php echo $disc; ?>">
                                                                     <input type="hidden" name="f_price" value="<?php echo $f_price; ?>">
                                                                     <input type="submit" name="cart" style="background-color:#6D87FF;" value="Add to Cart" class="w3-margin-bottom w3-text-white w3-small w3-button  w3-round" >
                                                                     </div>
                                                 </div>
                       </div>
 </div>
                       
</form>                     
</div>


</div>         
<?php
   }


?>
  <!-- Book show end-->







<?php
//include 'footer.php';
?>
</body>
</html>
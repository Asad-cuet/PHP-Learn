<?php

include 'header.php';


  // adding to cart. its done
  if(isset($_REQUEST['cart'])) {

    $itemid =$_REQUEST['book_id']; // Recieving id

    if (!isset($_SESSION['items'])) {
      $_SESSION['items'] = array();
    }
array_push($_SESSION['items'],$itemid); // id adding in array

    // session_destroy();


  }

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
  .my-h-center { display: block; margin-left:auto;margin-right:auto;width:30%}
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
</style>
<script>   //jquery goes here
  $(document).ready(function(){

    $("#book_list").addClass("w3-dark-gray");

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





                               <!--Search bar start -->
<div class="w3-panel"><div class="w3-bar w3-center w3-mobile">    
<input type="text" class=" 3-bar-item w3-large" placeholder="Search by Typing" oninput="w3.filterHTML('#box','.item',this.value)">
</div> </div>



<form method="post" class=" my-h-center w3-mobile">
<div class="w3-panel w3-center">
<select class="w3-select w3-border" name="c_name">
<option value=" " disabled selected>Search by Category</option>
<option value="all">All</option>
<?php
include 'config.php';
$read_query="SELECT * FROM category";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {
     $cat_id=$row[0];
     $cat_name=$row[1];

?>
<option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
<?php
}
?>


</select>
<input type="submit" name="search_" value="Search" class= "w3-round w3-button w3-cyan w3-text-white">
</div>
</form>


   <!--Search bar end -->






<?php
include 'config.php';

if(isset($_REQUEST['search_'])) { //If search by category
 if(!empty($_REQUEST['c_name'])) { $cat_id=$_REQUEST['c_name'];
  if($cat_id=='all') { $read_query="SELECT * FROM Book_info LEFT JOIN category ON book_info.Category=category.Category_id ORDER BY Book_id DESC";  } else {
  $read_query="SELECT * FROM book_info LEFT JOIN category ON book_info.Category=category.Category_id  WHERE Category='$cat_id' ORDER BY Book_id DESC"; } //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
  $result=mysqli_query($connection,$read_query);  
  } 
} else { 
 $read_query="SELECT * FROM Book_info LEFT JOIN category ON book_info.Category=category.Category_id ORDER BY Book_id DESC";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
 $result=mysqli_query($connection,$read_query); }
 $s_r=1;
 while($row=mysqli_fetch_row($result)) {
           $book_id=$row[0];
           $book_pic=$row[1];
           $book_title=$row[2];
           $book_author=$row[3];
           $book_published=$row[4];
           $book_price=$row[5];
           $disc=$row[6];
           $f_price=$row[7];
           $cat_id=$row[8];
           $book_avail=$row[9];
           $book_ordered=$row[10];
           $cat_name=$row[12];
           
?>




<div class="w3-panel" id="box">     <!--  Row start -->

<form method="post" action="cart_pro.php?page=book_list.php">
<div class="w3-row w3-border item" style="background-color:#E7E7FE">
 <div class="w3-col l1 m3 s6 "><div class="w3-panel"><a href="single.php?book_id=<?php echo $book_id; ?>"><img src="admin/uploads/<?php echo $book_pic; ?>" style="width:100%;"></a></div></div>
 <div class="w3-col l11"><div class="w3-container">
                                                 <div class="w3-row">
                                                                      <div class="w3-col l3">
                                                                     <p><b>Title:</b><?php echo $book_title; ?></p>
                                                                     <p><b>Author:</b><?php echo $book_author; ?></p>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Published Year:</b><?php echo $book_published; ?></p>
                                                                     <p><b>Category:</b><?php echo $cat_name; ?></p>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Price:</b><?php echo $book_price; ?>tk</p>
                                                                     <p><b>Discount:</b><?php echo $disc; ?>%</p>
                                                                     <p><b>Final Price:</b><?php echo $f_price; ?>tk</p>
                                                                     </div>
                                                                     <div class="w3-col  l3">
                                                                     <input type="hidden" name="b_id" value="<?php echo $book_id; ?>">
                                                                     <input type="hidden" name="b_name" value="<?php echo $book_title; ?>">
                                                                     <input type="hidden" name="au_name" value="<?php echo $book_author; ?>">
                                                                     <p><b>Quantity:</b><input type="number" name="quant" class="w3-mobile" value="1" min="1"></p>
                                                                     <input type="hidden" name="price" value="<?php echo $book_price; ?>">
                                                                     <input type="hidden" name="disc" value="<?php echo $disc; ?>">
                                                                     <input type="hidden" name="f_price" value="<?php echo $f_price; ?>">
                                                                     <input type="submit" name="cart" value="Add to Cart" style="background-color:#6D87FF;" class="w3-margin-bottom w3-button w3-text-white w3-small w3-round" >
                                                                     </div>
                                                 </div>
                       </div>
 </div>
                       
                     
</div>
</form>

</div>     <!--  Row end -->
<?php
 }

?>




</body>
</html>
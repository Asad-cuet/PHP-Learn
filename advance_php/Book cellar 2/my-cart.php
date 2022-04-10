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
  .my-h-center { display: block; margin-left:auto;margin-right:auto;width:30%}
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
</style>
<script>   //jquery goes here
  $(document).ready(function(){

    $("#view_cart").addClass("w3-dark-gray");

});

</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">
<?php if(!empty($_SESSION['cart']) && isset($_SESSION['cart'])) { ?>
<div class="w3-container">
<div class="w3-panel w3-center w3-text-white w3-red">

<h6>If you want to change the quantity number of any product.Remove the product from cart & add again with set quantity</h6>
</div>
</div>

<?php } ?>


<?php
$total_price=0;
if(isset($_SESSION['cart'])) {

  foreach($_SESSION['cart'] as $key => $value) {
 $total_price=$total_price+($value['quantity']*$value['f_price']);
?>


<div class="w3-panel">     

<div class="w3-row w3-border" style="background-color:#E7E7FE" >
 <div class="w3-col l12"><div class="w3-container">
                                                 <div class="w3-row">
                                                                      <div class="w3-col l3">
                                                                     <p><b>Title:</b><?php echo $value['b_name']; ?></p>
                                                                     <p><b>Author:</b><?php echo $value['author']; ?></p>
                                                                     </div>
                                                                      <div class="w3-col s1 m2 l3">
                                                                     
                                                                     <p><b>Quantity:</b>
                                                                     <?php echo $value['quantity']; ?>
                                                                     </p>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Price per item:</b><?php echo $value['price'];echo"(-".$value['disc']."%)";echo"=".$value['f_price']; ?>tk</p>
                                                                     <form action="cart_pro.php" method="post">
                                                                     <input type="hidden" name="b_id" value="<?php echo $value['b_id']; ?>">
                                                                     <input type="submit" name="remove_cart" value="Remove" class=" w3-small w3-round w3-small w3-button w3-red" >
                                                                     </form>
                                                                     </div>
                                                                     <div class="w3-col w3-panel l3">
                                                                     <p><b>Total tk:</b><?php echo ($value['quantity']*$value['f_price']); ?></p>
                                                                     </div>
                                                 </div>
                       </div>
 </div>
                       
                    
</div>


</div> 


<?php
  }
}
?>


<div class="w3-center">
<div class="w3-panel">
<h5>Your grand price: <?php echo $total_price; ?>.00 tk</h5>


</div>
</div>


<div class="w3-center">
<div class="w3-bar">
  <form method="POST" action="order_confirm.php">
  <input type="submit" name="confirm" value="Order Confirm" class="w3-bar-item w3-button w3-blue w3-hover-teal w3-round">
  <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
</form>
</div>
</div>





</body>
</html>
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
    <title>Cart</title>
<meta name="keywords" content="About Book cellar Library,Book cellar,online library,Home delivery libarry free">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
/* width */
::-webkit-scrollbar {
  width: 12px;
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
    $("#logo").hide();
    $("#logo2").hide();

});

</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">
<?php if(!empty($_SESSION['cart']) && isset($_SESSION['cart'])) { ?>


<?php } ?>



<div class="w3-panel" style="margin-top:69px;position:relaive;">     

<div class="w3-row w3-border" style="background-color:#C1D5D5" >
 <div class="w3-col l12"><div class="w3-container">
<?php
$total_price=0;
$flag=0;
if(isset($_SESSION['cart'])) {
 
  foreach($_SESSION['cart'] as $key => $value) {
 $total_price=$total_price+($value['quantity']*$value['f_price']);
 
 //checking delivery fee
 $id=htmlspecialchars($value['b_id']);
include 'config.php';
 $read_query="SELECT * FROM Book_info WHERE Book_id='$id'";  
$result=mysqli_query($connection,$read_query) or die("Failed");
while($row=mysqli_fetch_row($result)) {
           $del_charge=htmlspecialchars($row[12]);
           if($del_charge==2)
           {
               $flag=1;
           }
}
?>



                                                 <div class="w3-row w3-border-bottom w3-border-white">
                                                                      <div class="w3-col l3">
                                                                     <h2 style="font-size:20px;"><?php echo htmlspecialchars($value['b_name']); ?></h2>
                                    <?php if(!empty($value['author'])) { ?><p><b>Author:</b><?php echo htmlspecialchars($value['author']); ?></p><?php } ?>  
                                         <?php if($value['charge']==2) { ?><p class="w3-text-red"><b>Delivery charge:Free</b></p><?php } ?>                       
                                                                     </div>
                                                                      <div class="w3-col m2 l3">
                                                                     
                                                                     <p><b>Quantity:<?php echo htmlspecialchars($value['quantity']); ?></b></p>
                                                                     <div class="w3-bar">
                                                                     <p class=""><b>Change Quantity:</b></p>     
                                                                     <form action="cart_pro.php" method="post" class="w3-bar-item">
                                                                     <b><input type="submit" name="mod_quant_plus" value="+1" class="w3-tag w3-border w3-border w3-green w3-hover-black"></b>
                                                                     <input type="hidden" name="b_id" value="<?php echo $value['b_id']; ?>">
                                                                     </form>
                                                                     <form action="cart_pro.php" method="post" class="w3-bar-item">
                                                                     <b><input type="submit" name="mod_quant_min" value="-1" class="w3-tag w3-border w3-border w3-red w3-hover-black"></b>
                                                                     <input type="hidden" name="b_id" value="<?php echo $value['b_id']; ?>">
                                                                     </form>
                                                                     </div>
                                                                     </p>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Price per item:</b><?php echo htmlspecialchars($value['price'])."tk ";echo"(Discount:".htmlspecialchars($value['disc'])."%)";echo"=".htmlspecialchars($value['f_price']); ?>tk</p>
                                                                     <form action="cart_pro.php" method="post">
                                                                     <input type="hidden" name="b_id" value="<?php echo htmlspecialchars($value['b_id']); ?>">
                                                                     <input type="submit" name="remove_cart" value="Remove" class=" w3-small w3-round w3-small w3-button w3-red" >
                                                                     </form>
                                                                     </div>
                                                                     <div class="w3-col w3-panel l3">
                                                                     <p><b>Total tk:</b><?php echo (htmlspecialchars($value['quantity'])*htmlspecialchars($value['f_price'])); ?></p>
                                                                     </div>
                                                 </div>



<?php
  }
}
?>
                       </div>
 </div>
                       
                    
</div>


</div> 

<div class="w3-center" style="">
<div class="w3-panel">
  
    <h5><b>Your total product price:</b> <?php echo $total_price; ?>.00 tk</h5>
    <h5><b>Delivery Charge:</b> <?php if($flag==1) { echo "Free"; } else { ?>কার্যকর।Depends on location. <?php } ?></h5>
<h5><b>Your grand price:</b> <i class="w3-text-red"><?php echo htmlspecialchars($total_price); ?>.00<?php if($flag==0) {echo "+"; } ?></i>tk</h5>


</div>
</div>


<div class="w3-center">
<div class="w3-bar">
  <form method="POST" action="order_confirm.php">
  <input type="submit" name="confirm" value="Order Confirm" class="w3-bar-item w3-button w3-blue w3-hover-teal w3-round">
  <input type="hidden" name="total_price" value="<?php echo htmlspecialchars($total_price); ?>">
  <input type="hidden" name="del_charge" value="<?php echo htmlspecialchars($flag); ?>">
</form>
</div>
</div>





</body>
</html>

<?php

?>
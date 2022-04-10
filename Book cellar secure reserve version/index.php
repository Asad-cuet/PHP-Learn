<?php
session_start();
ob_start();

include 'header.php';







?>





<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS.css">
<script src="W3.JS.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <title>Book Cellar BD | An online library in Bangladesh</title>
<meta name="description" content="A book venture formed by students of DU with the vision to facilitate book lovers in their thirst for books. You can buy all books in higher discount.">
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
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
</style>
<script>   //jquery goes here
  $(document).ready(function(){
 
 $("#index").addClass("w3-dark-gray");

});

</script>  
</head>
<body class="w3-sans-serif" style="background-color:#F1F1F1">

<?php 
if(isset($_REQUEST['msg'])) { 

?>
<div class="w3-container w3-blue w3-center w3-text-white">
      <h5>আপনার অর্ডারটি আমরা গ্রহণ করেছি।আমরা শিগ্রই আপনাকে কল দিবো,ধন্যবাদ।</h5>
</div>
<?php

}
?>


<?php 
if(isset($_REQUEST['added'])) { 

?>
<div class="w3-container w3-blue w3-center w3-text-white">
      <h5>বইটি একবার গ্রহণ করা হয়েছে।বইয়ের সংখ্যা পরিবর্তন করতে চাইলে Cart থেকে পরিবর্তন করুন।</h5>
</div>
<?php

}
?>

<?php include'notice.php'; ?>

        <!-- Book show start -->
<?php
include 'config.php';
$read_query="SELECT * FROM post ORDER BY Post_id DESC";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {
      $post_id=htmlspecialchars($row[0]);
      $book_id=htmlspecialchars($row[1]);






$read_query2="SELECT * FROM Book_info LEFT JOIN category ON category.Category_id=Book_info.Category WHERE Book_id='$book_id'";
$result2=mysqli_query($connection,$read_query2);

while($row=mysqli_fetch_row($result2)) {
    $pic=htmlspecialchars($row[1]);
    $title=htmlspecialchars($row[2]);
    $author=htmlspecialchars($row[3]);
    $published=htmlspecialchars($row[4]);
    $price=htmlspecialchars($row[5]);
    $disc=htmlspecialchars($row[6]);
    $f_price=htmlspecialchars($row[7]);
    $cat_name=htmlspecialchars($row[16]);
    $book_id2=htmlspecialchars($row[0]);
    $del_charge=htmlspecialchars($row[12]);
    $rating=htmlspecialchars($row[13]);





      ?>
<div class="w3-panel">     

 <form method="post" action="cart_pro.php?page=index.php">
<div class="w3-row w3-border"  style="background-color:#C1D5D5">
 <div class="w3-col l1 m3 s6 w3-center "><div class="w3-panel "><a href="single.php?book_id=<?php echo $book_id2; ?>"><img src="admin/uploads/<?php echo $pic; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" style="width:100%;"></a></div></div>
 <div class="w3-col l11"><div class="w3-container">
                                                 <div class="w3-row">
                                                                      <div class="w3-col l3">
                                                                     <h2 style="font-size:20px;"><?php echo $title; ?></h2>
                                  <?php if(!empty($author)) { ?><h2 style="font-size:16px;"><b>Author:</b><?php echo $author; ?></h2><?php } ?>
                                        <?php if($del_charge==2) { ?><p class="w3-text-red"><b>Delivery charge:Free</b></p><?php } ?>
                                                                     </div>
                                                                      <div class="w3-col  l3">
                                                                     <p><b>Published Year:</b><?php echo $published; ?></p>
                                                                     <p><b>ক্যাটাগরি:</b><?php echo $cat_name; ?></p>
                                       <?php if(!empty($rating)) { ?><p><b>Rating:</b><?php echo $rating; ?></p><?php } ?>
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
                                                                     <input type="hidden" name="del_charge" value="<?php echo $del_charge; ?>">
                                                                     <input type="submit" name="cart" style="background-color:#6D87FF;" value="Buy" class="w3-margin-bottom w3-text-white w3-small w3-button  w3-round" ><br>
                                                                     
                                                                     </div>
                                                 </div>
                       </div>
 </div>
                       
</form>                     
</div>


</div>         
<?php
   }

}
?>
  <!-- Book show end-->







<?php
include 'footer.php';
?>
</body>
</html>
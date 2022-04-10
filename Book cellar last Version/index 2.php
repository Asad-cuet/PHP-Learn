<?php
session_start();
ob_start();

include 'header.php';







?>





<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.CSS-my.css">
<script src="W3.JS.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <title>Book Cellar BD | An online library in Bangladesh</title>
<meta name="description" content="A book venture formed by students of DU with the vision to facilitate book lovers in their thirst for books. You can buy all books in higher discount.">
<meta name="keywords" content="About Book cellar Library,Book cellar,online library,Home delivery libarry free">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
  .my-book {
    height:150px;width:auto;
    max-width:100px!important;
}
.my-side-20 { padding-left:5px;padding-right:5px; padding-top:0!important;padding-bottom:0!important;}
@media screen and (max-width:992px) { /* it will active under 600 px */
.my-side-20 {   -ms-flex: 25%!important; /* IE10 */ flex: 25%!important;height:auto;}
.my-book {height:100px;width:auto;}

}


@media screen and (max-width:500px) { /* it will active under 600 px */
    .my-side-20 {   -ms-flex: 100%!important; /* IE10 */ flex: 100%!important;height:auto;padding:0!important;}
    .my-book {height:100px;width:auto;}
}

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
<div class="my-row">
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



<div class="my-side-20 w3-text-white">
    
       <div class="my-dark-gray">
        <div class="w3-panel">
                   <div class="w3-center w3-margin-bottom w3-margin-top">
                   <a href="single.php?book_id=<?php echo $book_id2; ?>"><img src="admin/uploads/<?php echo $pic; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" style="width:100%;"></a>
                   </div>
                   <h2 style="font-size:20px"><?php echo $title; ?></h2>
                   <?php if(!empty($author)) { ?><h2 style="font-size:16px;">Author:<?php echo $author; ?></h2><?php } ?>
                   <?php if($del_charge==2) { ?><p class="w3-text-red">Delivery charge:Free</p><?php } ?>
                   <p>Published Year:<?php echo $published; ?></p>
                   <p>Category:<?php echo $cat_name; ?></p>
                   <?php if(!empty($rating)) { ?><p>Rating:<?php echo $rating; ?></p><?php } ?>
                    <p>Price:<?php echo $price; ?></p>
                   <p>Discount:<?php echo $disc; ?></p>
                   <p>Final Price:<?php echo $f_price; ?></p>
                   <form method="post" action="cart_pro.php?page=index.php">
                   <input type="hidden" name="b_id" value="<?php echo $book_id2; ?>">
                                                                     <input type="hidden" name="b_name" value="<?php echo $title; ?>">
                                                                     <input type="hidden" name="au_name" value="<?php echo $author; ?>">
                                                                     <p><b>Quantity:</b><input type="number" name="quant" class="w3-mobile" value="1" min="1"></p>
                                                                     <input type="hidden" name="price" value="<?php echo $price; ?>">
                                                                     <input type="hidden" name="disc" value="<?php echo $disc; ?>">
                                                                     <input type="hidden" name="f_price" value="<?php echo $f_price; ?>">
                                                                     <input type="hidden" name="del_charge" value="<?php echo $del_charge; ?>">
                                                                     
                    <div class="w3-center w3-margin-bottom">
                    <input type="submit" name="cart" style="background-color:#6D87FF;" value="Buy" class="w3-margin-bottom w3-text-white w3-small w3-button  w3-round" ><br>
                    </div>
</form>
        </div>
        </div>
 </div>



<?php
   }

}
?>
  <!-- Book show end-->
  </div>






<?php
include 'footer.php';
?>
</body>
</html>
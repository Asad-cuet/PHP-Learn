<?php
session_start();
ob_start();
include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
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
</style>
<script>   //jquery goes here
$(document).ready(function(){
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-hide-large">
<input required type="text" name="data" placeholder="Search..." class="w3-border-black w3-round">
<input type="submit" value="Search" name="search" placeholder="" class="w3-button w3-round w3-dark-gray w3-small">
</form>
</div>
    


<?php 
if(isset($_REQUEST['added'])) { 

?>
<div class="w3-container w3-blue w3-center w3-text-white">
      <h5>বইটি একবার গ্রহণ করা হয়েছে।বইয়ের সংখ্যা পরিবর্তন করতে চাইলে Cart থেকে পরিবর্তন করুন।</h5>
</div>
<?php

}
?>



        <!-- Book show start -->
        <?php
        if(empty($_REQUEST['data']))
        {
            header("location:category_list.php");
        } else
        {
        include 'config.php';
    $input=$_REQUEST['data'];
    $input=trim($input);
    $input=stripslashes($input);
    $input=htmlspecialchars($input);
    $key=filter(mysqli_real_escape_string($connection,$input)); // Inputing data



$cats=array();
$b_ids=array();
$read_query2="SELECT * FROM Book_info LEFT JOIN category ON Book_info.Category=category.Category_id WHERE Keyword LIKE '%{$key}%';";
$result2=mysqli_query($connection,$read_query2);
$count=mysqli_num_rows($result2);
if($count>0)
     {
while($row=mysqli_fetch_row($result2)) {
    $pic=show($row[1]);
    $title=show($row[2]);
    $author=show($row[3]);
    $published=show($row[4]);
    $price=show($row[5]);
    $disc=show($row[6]);
    $f_price=show($row[7]);
    $cat_id=show($row[15]);
    $cat_name=show($row[16]);
    $book_id2=show($row[0]);

    
    array_push($cats,$cat_id); // id adding in array
    array_push($b_ids,$book_id2); // id adding in array



      ?>
<div class="w3-panel">     

 <form method="post" action="cart_pro.php?page=search.php&data=<?php echo $key; ?>">
<div class="w3-row w3-border"  style="background-color:#C1D5D5">
 <div class="w3-col l1 m3 s6 w3-center "><div class="w3-panel "><a href="single.php?book_id=<?php echo $book_id2; ?>"><img src="admin/uploads/<?php echo $pic; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" style="width:100%;"></a></div></div>
 <div class="w3-col l11"><div class="w3-container">
                                                 <div class="w3-row">
                                                                      <div class="w3-col l3">
                                                                     <h2 style="font-size:20px;"><?php echo $title; ?></h2>
                                                                     <h2 style="font-size:16px;"><b>Author:</b><?php echo $author; ?></h2>
                                                                     </div>
                                                                      <div class="w3-col  l3 w3-margin-top">
                                                                     <p><b>Published Year:</b><?php echo $published; ?></p>
                                                                     <p><b>ক্যাটাগরি:</b><?php echo $cat_name; ?></p>
                                                                     </div>
                                                                      <div class="w3-col  l3 w3-margin-top">
                                                                     <p><b>Price:</b><?php echo $price; ?>tk</p>
                                                                     <p><b>Discount:</b><?php echo $disc; ?>%</p>
                                                                     <p><b>Final Price:</b><?php echo $f_price; ?>tk</p>
                                                                     </div>
                                                                     <div class="w3-col  l3 w3-margin-top">
                                                                     <input type="hidden" name="b_id" value="<?php echo $book_id2; ?>">
                                                                     <input type="hidden" name="b_name" value="<?php echo $title; ?>">
                                                                     <input type="hidden" name="au_name" value="<?php echo $author; ?>">
                                                                     <p><b>Quantity:</b><input type="number" name="quant" class="w3-mobile" value="1" min="1"></p>
                                                                     <input type="hidden" name="price" value="<?php echo $price; ?>">
                                                                     <input type="hidden" name="disc" value="<?php echo $disc; ?>">
                                                                     <input type="hidden" name="f_price" value="<?php echo $f_price; ?>">
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
else 
{   ?>
    <h3 class="w3-text-red w3-center">Nothing Found.Try other keyword</h3>
<?php } 

?>
  <!-- Book show end-->



<?php
if($count>0)
{
?>
<div class="w3-container"><h3>Related Result</h3></div>
<?php
$a_length=count($cats);
for($i=0;$i<$a_length;$i++)
{
$read_query3="SELECT * FROM Book_info LEFT JOIN category ON Book_info.Category=category.Category_id WHERE Book_info.Category='$cats[$i]'";
$result3=mysqli_query($connection,$read_query3);
$count2=mysqli_num_rows($result3);
if($count2>0)
     {
while($row2=mysqli_fetch_row($result3)) {
    $pic2=show($row2[1]);
    $title2=show($row2[2]);
    $author2=show($row2[3]);
    $published2=show($row2[4]);
    $price2=show($row2[5]);
    $disc2=show($row2[6]);
    $f_price2=show($row2[7]);
    $cat_id2=show($row2[15]);
    $cat_name2=show($row2[16]);
    $book_id3=show($row2[0]);
  
  for($j=0;$j<$a_length;$j++)  // Checking Previous print
{
    if($book_id3==$b_ids[$j])
    {
        $printed=1;
    }

    
}

if($printed==1)
{
    $printed=0;
    continue;
}


      ?>




<div class="w3-panel">     

 <form method="post" action="cart_pro.php?page=search.php&data=<?php echo $key; ?>">
<div class="w3-row w3-border"  style="background-color:#C1D5D5">
 <div class="w3-col l1 m3 s6 w3-center "><div class="w3-panel "><a href="single.php?book_id=<?php echo $book_id3; ?>"><img src="admin/uploads/<?php echo $pic2; ?>" alt="<?php echo $title2; ?>" title="<?php echo $title2; ?>" style="width:100%;"></a></div></div>
 <div class="w3-col l11"><div class="w3-container">
                                                 <div class="w3-row">
                                                                      <div class="w3-col l3">
                                                                     <h2 style="font-size:20px;"><?php echo $title2; ?></h2>
                                                                     <h2 style="font-size:16px;"><b>Author:</b><?php echo $author2; ?></h2>
                                                                     </div>
                                                                      <div class="w3-col  l3 w3-margin-top">
                                                                     <p><b>Published Year:</b><?php echo $published2; ?></p>
                                                                     <p><b>ক্যাটাগরি:</b><?php echo $cat_name2; ?></p>
                                                                     </div>
                                                                      <div class="w3-col  l3 w3-margin-top">
                                                                     <p><b>Price:</b><?php echo $price2; ?>tk</p>
                                                                     <p><b>Discount:</b><?php echo $disc2; ?>%</p>
                                                                     <p><b>Final Price:</b><?php echo $f_price2; ?>tk</p>
                                                                     </div>
                                                                     <div class="w3-col  l3 w3-margin-top">
                                                                     <input type="hidden" name="b_id" value="<?php echo $book_id3; ?>">
                                                                     <input type="hidden" name="b_name" value="<?php echo $title2; ?>">
                                                                     <input type="hidden" name="au_name" value="<?php echo $author2; ?>">
                                                                     <p><b>Quantity:</b><input type="number" name="quant" class="w3-mobile" value="1" min="1"></p>
                                                                     <input type="hidden" name="price" value="<?php echo $price2; ?>">
                                                                     <input type="hidden" name="disc" value="<?php echo $disc2; ?>">
                                                                     <input type="hidden" name="f_price" value="<?php echo $f_price2; ?>">
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
}
}

} // for serch isset

?>




















<?php
  
include 'footer.php';
?>
</body>
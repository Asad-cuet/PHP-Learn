<?php 

include 'header.php';

  if(!isset($_SESSION['username'])) {   // If try to login by url
      header("location:logout.php");
    }

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
  .my-white {background-color: #F1F1F1;}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("#post").addClass("w3-dark-gray");

});
</script>  


</head>


<?php
 // pagination area start
 include 'config.php';
 $read_query="SELECT * FROM post";  //SELECT * FROM table_name ORDER BY column_name(s) 
 $result=mysqli_query($connection,$read_query);   // Collecting All row from table
 
 $limit=3;    // This is Limit variable
 if(mysqli_num_rows($result)) {                     //counting row number
      $total_rec=mysqli_num_rows($result);
      $total_page=ceil($total_rec/$limit);            //counting page number by limit
 }
 if(isset($_REQUEST['page'])) {                                               //if click on pagination
 $rec_pag=$_REQUEST['page'];               #  Recieving Page number on click
 } else { $rec_pag=1; $s_r=1;}                                                #Default Page Number=1 and serial number=1
 
 $offset= ($rec_pag - 1) * $limit;
 $pag_query="SELECT * FROM post  ORDER BY Post_id DESC LIMIT {$offset},{$limit}";
 $pagination=mysqli_query($connection,$pag_query);
 // pagination Process close
?>

<body class="my-white w3-sans-serif">     <!-- Body-->
<div class="w3-bar">
    <div class="w3-bar-item"><h4>All Post</h4></div>
    <a class="w3-bar-item w3-right w3-button w3-red" href="add_post.php"><h6>Add Post</h6></a>
</div>    


<div class="w3-container">
<table class="w3-table-all">
<tr class="w3-indigo">
<th>Serial</th>
<th>Picture</th>
<th>Title</th>
<th>Category</th>
<th>Date</th>
<th>Author</th>
<th>Edit</th>
<th class="w3-center">Delete</th>
</tr>

<?php
$s_r=($rec_pag*$limit)-2;
 while($row=mysqli_fetch_row($pagination)) {
  $id=$row[0];
  $title=$row[1];
  $category=$row[3];
  $date=$row[4];
  $author=$row[5];
  $img=$row[6];

?>
<tr class="w3-hover-cyan">
<td><?php echo $s_r; ?></td>
<td><img src="uploads/<?php echo $img; ?>" width="50px" height="auto"></td>
<td><?php echo $title; ?></td>
<td><?php echo $category; ?></td>
<td><?php echo $date; ?></td>
<td><?php echo $author; ?></td>
<td><a href="edit_post.php?id=<?php echo $id; ?>&img=<?php echo $img ?>"><span class="fa fa-edit"></span>Edit</a></td>
<td class="w3-center"><a href="delete_post.php?cat=<?php echo $category; ?>&id=<?php echo $id; ?>&img=<?php echo $img; ?>" class="w3-button w3-hover-red" onclick="return confirm('Are you sure?')"><span class="fa fa-trash"></span>Delete</a></td>
</tr>
<?php
  $s_r++;
 }
 ?>
 </table>
 </div>





 <!-- Pagination Content  start-->
<div class="w3-center">
<div class="w3-bar w3-border w3-border-black w3-teal">
<?php if ($rec_pag>1) { echo "<a class='w3-bar-item w3-button w3-border' href='post.php?page=".($rec_pag-1)."'>Previous</a>"; } ?>
<?php for($i=1;$i<=$total_page;$i++){  // For Loop start

 ?>
<a class="w3-bar-item w3-button w3-border" style="background-color:<?php if($i==$rec_pag) { echo "#2A5D78";}?>" href="post.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>

<?php
}
?>
<?php if ($total_page>$rec_pag) { echo "<a class='w3-bar-item w3-button w3-border' href='post.php?page=".($rec_pag+1)."'>Next</a>"; } ?>
</div>
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
    <title>Category List</title>
<meta name="description" content="All book category of Book Cellar book collection.">
<meta name="keywords" content="About Book cellar Library,Book cellar,online library,Home delivery libarry,free home delivery">
<meta name="viewport" content="width=device-width,initial-scale=1">
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

.my-dark-gray 
{
    background-color:rgba(0,0,0,0.6);
}
</style>
<script>   //jquery goes here
$(document).ready(function(){
    $("#book_list").addClass("w3-dark-gray");+
    
    $("#logo2").hide();
    $("#logo").hide();
 // $("#class_open").click(function(){
   // $("#class910").slideDown();
 // });
});
</script>  
</head>
<body class="w3-sans-serif">
    
    <div class="w3-container w3-center" style="margin-top:65px;position:relaive;">
    <form method="POST" action="search.php" class="w3-hide-large">
<input required type="text" name="data" placeholder="Search..." class="w3-border-black w3-round">
<input type="submit" value="Search" name="search_" class="w3-button w3-round w3-dark-gray w3-small">
</form>
</div>
 


<?php
include 'config.php';
$read_query="SELECT * FROM user_category";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {
  $cat_name=htmlspecialchars($row[1]);
  $but_name_list=htmlspecialchars($row[2]);
  $but_list=htmlspecialchars($row[3]);
?>

<div class="w3-container">
<h3><?php echo $cat_name; ?></h3>
</div>
<div class="w3-bar w3-border-bottom">

<?php
$but_id=explode(",",$but_list);
$but_name=explode(",",$but_name_list);
for($i=0;$i<count($but_id);$i++)
{

?>
<a href="category.php?cat_id=<?php echo $but_id[$i]; ?>" class="w3-bar-item w3-margin w3-button w3-black w3-round w3-small"><?php echo $but_name[$i]; ?></a>
<?php
}


?>
</div>
<?php
}
?>


<?php
include 'footer.php';
?>
</body>
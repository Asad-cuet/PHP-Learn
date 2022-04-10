<?php
include 'header.php';
if($_SESSION['role']=='Moderator') {   // Moderator Has not Permission For this Page
    header("location:logout.php");
  }
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
    $("#user").addClass("w3-dark-gray");

});
</script>  


</head>




<body class="my-white w3-sans-serif">     <!-- Body-->


    <!-- Page Header-->
<?php
include 'config.php';                             // Connecting with Database
// pagination area start
$read_query="SELECT * FROM user_info";
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
$pag_query="SELECT * FROM user_info ORDER BY ID DESC LIMIT {$offset},{$limit}";
$pagination=mysqli_query($connection,$pag_query);
// pagination close

?>

<div class="w3-bar">
    <div class="w3-bar-item"><h4>All Users</h4></div>
    <a class="w3-bar-item w3-right w3-button w3-red" href="add_user.php"><h6>Add User</h6></a>
</div>    




<!-- Table 1st Row-->
<div class="w3-container">
<form method="post" action="delete.php">
<table class="w3-table-all">
<tr class="w3-indigo">
<th>Serial Number</th>
<th>ID</th>
<th>Name</th>
<th>Username</th>
<th>Role</th>
<th class="w3-center">Edit</th>
<th class="w3-center"><input type="submit"  name="delete_m_data" class="w3-button w3-blue w3-hover-red" value="Delete" onclick="return confirm('Are you sure?')"></th>
</tr>

<!-- Table 2nd row start here -->
<?php
$s_r=($rec_pag*$limit)-2;
while($row=mysqli_fetch_row($pagination)) { //Collecting from pagination
    $id=$row[0];
    $name=$row[1]." ".$row[2];
    $username=$row[3];
    $role=$row[5];
    
?>
<tr class="w3-hover-cyan w3-border">
<td><?php echo $s_r;  ?></td>
<td><?php echo $id;  ?></td>
<td><?php echo $name;  ?></td>
<td><?php echo $username;  ?></td>
<td><?php echo $role;  ?></td>
<td class="w3-center"><a class="w3-button w3-hover-dark-gray" href="edit.php?rec_id=<?php echo $id; ?>"><span class="fa fa-edit"></span>Edit</a></td>
<td class="w3-center"><input type="checkbox" name="check_data[]" value="<?php  echo $id; ?>"></td>
</tr>


<?php
$s_r++;     // Increament of serial number
}

?>
</table>
</form>
</div>
<!-- Table  Ends here -->
<br><br>

<!-- Pagination Content  start-->
<div class="w3-center">
<div class="w3-bar w3-border w3-border-black w3-teal">
<?php if ($rec_pag>1) { echo "<a class='w3-bar-item w3-button w3-border' href='user.php?page=".($rec_pag-1)."'>Previous</a>"; } ?>
<?php for($i=1;$i<=$total_page;$i++){  // For Loop start

 ?>
<a class="w3-bar-item w3-button w3-border" style="background-color:<?php if($i==$rec_pag) { echo "#2A5D78";}?>" href="user.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>

<?php
}
?>
<?php if ($total_page>$rec_pag) { echo "<a class='w3-bar-item w3-button w3-border' href='user.php?page=".($rec_pag+1)."'>Next</a>"; } ?>
</div>

<!-- Pagination Content  Ends->





</body>

</html>
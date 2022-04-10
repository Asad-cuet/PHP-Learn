<?php
//add to cart process
$itemid =$_REQUEST['book_id']; // Recieving id


<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" autocomplete="off" enctype="multipart/form-data">

if (!isset($_SESSION['items'])) {
  $_SESSION['items'] = array();
}
array_push($_SESSION['items'],$itemid); // id adding in array
$id=$_SESSION['items']; // taking array in a variable
echo $separ_id=implode(",",$id);  // implode differing id by ,

// others thing
echo $string_id=json_encode($id);  // json_encode converting array to string
var_dump($_SESSION['items']); //print array


//Coverting string to array
$str = "25,26,28";
print_r ($arr=explode(",",$str));

echo implode(",",$arr);   //implode coveerting array to string



$_SESSION['cart']=array_values($_SESSION['cart']);  // rearranging keys
in_array($_REQUEST['b_id'],$my_item)  //Search in array

//Covert smaller string from bigger
$string = "Hello,world,Beautiful,day,today.";
 echo $token = strtok($string, ",");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(",");
   }

//Covert bigger string by joining smaller
   echo strtr("Hilla Warld","ia","eo");


//Return sum of all values in array

 $a=array(5,15,25);
echo array_sum($a); // 45


//accessing two array together
for($i=0;$i<$c_arr_id;$i++) 
{
       for($x=0;$x<$c_arr_quant;$x++) 
        {
             if($i==$x) 
             {
                

             }
        }
}

$t_name=ucfirst(mysqli_real_escape_string($connection,$_POST['t_name'])); // Inputing data

//Bangladesh time
echo date('F j, Y, g:i a', time() + 4*3600); # Bangladesh is in UTC+6 

action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  

$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

$insert_query="INSERT INTO user_info3(First_name,Last_name,Email) VALUES ('$fname','$lname','$email');";
$send=mysqli_query($connection,$insert_query);

$update_query="UPDATE user_info3 SET First_name='$fname',Last_name='$lname',Email='$email' WHERE ID=$id";
$update=mysqli_query($connection,$update_query);

$select_query="SELECT * FROM user_info3 WHERE ID=$rec_id";  // WHERE ID in ($id_seper)
$select=mysqli_query($connection,$select_query);


$delete_query="DELETE FROM user_info3 WHERE id=$rec_id;";
$delete=mysqli_query($connection,$delete_query);

$read_query="SELECT * FROM user_info3";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {
   // $id=$row[0];
   // $name=$row[1]." ".$row[2];
   // $email=$row[3];

    
}

$check_query="SELECT Username FROM user_info WHERE Username='$user_name'";
$check=mysqli_query($connection,$check_query) or die(" Check query failed");
$count=mysqli_num_rows($check);
if (!$count>0)  { }


$update_query2= "UPDATE category SET No_of_book = No_of_book + 1 WHERE Category_id='$cat_id'";

// Multiple query
$read_query="SELECT post.Post_id,post.Book_id,post.Book_title,post.Book_author,post.Published,post.Price,post.Category_id,post.Category_name,
            category.Category_id,category.Category_name FROM post LEFT JOIN category ON post.Category_id=category.Category_id ORDER BY post.Post_id DESC";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);



$read_query="SELECT * FROM Book_info LEFT JOIN category ON book_info.Category=category.Category_id ORDER BY Book_id DESC";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query); 





$verify_query="SELECT * FROM user_info WHERE Username='$admin_user' AND Password='$admin_pass'";
$verify=mysqli_query($connection,$verify_query) or die("Query Failed");
if(mysqli_num_rows($verify)>0) {
    while($row=mysqli_fetch_row($verify)) {
      
      session_start();
      $_SESSION['username']=$row[3];
      $_SESSION['id']=$row[0];
      $_SESSION['role']=$row[5];
      header("location:post.php");

    }
} 



$search_query="SELECT * FROM post WHERE Title_name LIKE '%{$search}%'";
$search=mysqli_query($connection,$search_query);


$update_query="UPDATE user_info3 SET First_name='$fname',Last_name='$lname',Email='$email' WHERE ID=$id";
$update=mysqli_query($connection,$update_query);


// MUltiple delete by checkbox
<input type="checkbox" name="check_data[]" value="<?php  echo $id; ?>" // box
$check_data=$_REQUEST['check_data']; //Process
$id_seper=implode(",",$check_data);
$query_M="DELETE FROM Category WHERE Category_id in ($id_seper)";
$table=mysqli_query($connection,$query_M);


// Table SHow
<table class="w3-table-all">
<tr>
<th></th>
<th>e</th>
<th></th>
<th></th>
<th></th>
</tr>

<?php
 //Database
 while($row=mysqli_fetch_row()) {

?>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<?php
 }
 ?>
 </table>








 // pagination area start
$read_query="SELECT * FROM user_info";
$result=mysqli_query($connection,$rea

d_query);   // Collecting All row from table

$limit=3;    // This is Limit variable
if(mysqli_num_rows($result)) {                     //counting row number
     $total_rec=mysqli_num_rows($result);
     $total_page=ceil($total_rec/$limit);            //counting page number by limit
}
if(isset($_REQUEST['page'])) {                                               //if click on pagination
$rec_pag=$_REQUEST['page'];               #  Recieving Page number on click
} else { $rec_pag=1; $s_r=1;}                                                #Default Page Number=1 and serial number=1

$offset= ($rec_pag - 1) * $limit;
$pag_query="SELECT * FROM user_info LIMIT {$offset},{$limit}";
$pagination=mysqli_query($connection,$pag_query);
// pagination Process close


<!-- Table 1st Row-->
<div>
<form method="" action="">
<table class="w3-table-all">
<tr class="w3-blue">
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>

<!-- Table 2nd row start here -->
<?php
$s_r=($rec_pag*$limit)-2;
while($row=mysqli_fetch_row($pagination)) { //Collecting from DB by pg to show in table

    
?>
<tr>
<td><?php echo ?></td>
<td><?php echo ?></td>
<td><?php echo ?></td>
<td><?php echo ?></td>
<td><?php echo ?></td>
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

<!-- Pagination Number start-->
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

//Pagination content close


 ?>










 // Img Uploads



 $destin="uploads/";
 $img_name_c=uniqid().$img['name'];
 move_uploaded_file($img_tmp_name,$destin.$img_name_c);  # move_upload_file(file tmp_name,destination);
 unlink("uploads/$img_before");
 // For remove=unlink("location/filename");



 // SESSIOn as array





session_start();         
$_SESSION['student']=array();
$student_name=$_POST['student_name']; //student_name form field name
$student_city=$_POST['city_id'];   //city_id form field name
array_push($_SESSION['student'],$student_name,$student_city);   
//print_r($_SESSION['student']);
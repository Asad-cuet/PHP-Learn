<?php


$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');

$insert_query="INSERT INTO user_info3(First_name,Last_name,Email) VALUES ('$fname','$lname','$email');";
$send=mysqli_query($connection,$insert_query);

$update_query="UPDATE user_info3 SET First_name='$fname',Last_name='$lname',Email='$email' WHERE ID=$id";
$update=mysqli_query($connection,$update_query);
$update_query2= "UPDATE category SET No_of_book = No_of_book + 1 WHERE Category_id='$cat_id'";

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



// Multiple query
$m_read_query="SELECT post.Post_id,post.Book_id,post.Book_title,post.Book_author,post.Published,post.Price,post.Category_id,post.Category_name,
            category.Category_id,category.Category_name FROM post LEFT JOIN category ON post.Category_id=category.Category_id ORDER BY post.Post_id DESC";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$m_read_query);



$read_query="SELECT * FROM Book_info LEFT JOIN category ON book_info.Category=category.Category_id ORDER BY Book_id DESC";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query); 




// Use for login
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


// MUltiple delete by checkbox
<input type="checkbox" name="check_data[]" value="<?php  echo $id; ?>" // Use in form
$check_data=$_REQUEST['check_data']; //Process
$id_seper=implode(",",$check_data);
$query_M="DELETE FROM Category WHERE Category_id in ($id_seper)";
$table=mysqli_query($connection,$query_M);

<?php

include 'header.php';

?>

<?php
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}



if(isset($_REQUEST['deliver'])) {
  $order_id1=$_REQUEST['order_id'];
       

 $order_id1=$_REQUEST['order_id'];


include 'config.php';


$read_query="SELECT * FROM order_seen WHERE Order_id='$order_id1'";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
$result=mysqli_query($connection,$read_query);
while($row=mysqli_fetch_row($result)) {

    $order_id=$row[1];
    $item=$row[2];
    $book_id=$row[3];
    $quant=$row[4];
    $f_price=$row[5];
    $c_name=$row[6];
    $c_email=$row[7];
    $c_cell=$row[8];
    $c_address=$row[9];
    $date=$row[10];



}

$arr_ids=explode(",",$book_id);
$book_price=array();


     for($x=0;$x<count($arr_ids);$x++) 
      {
          

            $read_query2="SELECT * FROM Book_info WHERE Book_id=$arr_ids[$x]";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 

            $result2=mysqli_query($connection,$read_query2); 

            while($row2=mysqli_fetch_row($result2)) {
            array_push($book_price,$row2[7]); 

           }
      
} 


$book_price=implode(",",$book_price);


 $insert_query="INSERT INTO delivered(Order_id,Item,Book_id,Quantity,Item_price,Price,Customer_name,Email,Cell,Adrress,Time) VALUES ('$order_id','$item','$book_id','$quant','$book_price','$f_price','$c_name','$c_email','$c_cell','$c_address','$date');";
 $send=mysqli_query($connection,$insert_query) or die("Insert failed");

 if($send) {
  $delete_query="DELETE FROM order_seen WHERE Order_id=$order_id;";
$delete=mysqli_query($connection,$delete_query) or die("delete failed");

  if($delete) {
  header("location:confirm.php");
 }
 }

}


if(isset($_REQUEST['o_remove'])) {
  include 'config.php';
  $order_id1=$_REQUEST['order_id'];
  $delete_query="DELETE FROM order_seen WHERE Order_id=$order_id1;";
  $delete=mysqli_query($connection,$delete_query) or die("delete failed");
  if($delete) {
    header("location:confirm.php");
   }
}




?>







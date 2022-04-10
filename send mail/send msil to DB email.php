<?php
$connection= mysqli_connect('localhost','asad','','user3');#mysqli_connect('HostName','Username','Password','DB_Name');
$subject="Test Mail";
$body="Hi Asad.Work Hard";
$header="From:mytest7733@gmail.com";

$read_query="SELECT * FROM user_info3";
$result=mysqli_query($connection,$read_query);

while($row=mysqli_fetch_row($result)) {
 
  $to_mail=$row[4];
  if(mail($to_mail,$subject,$body,$header)) {
      echo "Mail sent to ".$to_mail."<br>";
  }
    
}

?>
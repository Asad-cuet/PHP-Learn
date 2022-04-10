<?php
$connection= mysqli_connect('localhost','root','','user');#mysqli_connect('HostName','Username','Password','DB_Name');

  function filter($data)
   {
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }


 function input($data) 
 {
    global $connection;
    $input=$_POST[$data];
    $input=trim($input);
    $input=stripslashes($input);
    $input=htmlspecialchars($input);
   // $input=input_filter($input);
    return ucfirst(mysqli_real_escape_string($connection,$input)); // Inputing data
    # example: $name=input("name");   echo $name;
 }

 function my_time()
 {
    return date('F j, Y, g:i a', time() - 6*3600);
    # example: echo $time=my_date();
 } 
 
 function input_file($destination,$file_data)
 {
   $file=$_FILES[$file_data];
    $name=uniqid().$file["name"];
   $tmp_name=$file["tmp_name"];
   $destin=$destination;
   move_uploaded_file($tmp_name,$destin.$name);  # move_upload_file(file tmp_name,destination);
   echo"Uploaded";
  #examp: input_file("destin/","carry-name");

 }

 function delete_file($destination,$name)
 {
   $destin=$destination;
   unlink("$destin.$name");
   #examp: delete_file("destin/","file-name")
 }

 function checkbox($data)
{
$check_data=$_REQUEST[$data]; //Process
 return implode(",",$check_data);
 #examp: $value=checkbox("array-name");
}

?>

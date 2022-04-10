<?php
$file=$_FILES['user'];
$name=$file["name"];
$tmp_name=$file["tmp_name"];

if(!empty($file)) {
    $destin="upload/";
    move_uploaded_file($tmp_name,$destin.$name);  # move_upload_file(file tmp_name,destination);
    echo "uploaded";
    $path="$destin.$name";
    
} else {
    echo "You didn't upload any file";
}

?>
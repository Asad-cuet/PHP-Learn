<?php
if(isset($_POST['submit'])){
	$file=$_FILES['file']['tmp_name'];
	if($_FILES['file']['type']=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		$file_name=time().'.jpg';
		imagejpeg($source,'upload/'.$file_name,30);
	}elseif($_FILES['file']['type']=='image/png'){
		$source=imagecreatefrompng($file);
		$file_name=time().'.png';
		imagepng($source,'upload/'.$file_name,30);
	}elseif($_FILES['file']['type']=='image/gif'){
		$source=imagecreatefromgif($file);
		$file_name=time().'.gif';
		imagegif($source,'upload/'.$file_name,30);
	}else{
		echo "Please select only jpg, png and gif image";
	}
}
if(isset($file_name)){
	echo "<img src='upload/$file_name'/>";
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="file" required>
	<input type="submit" name="submit"/>
</form>
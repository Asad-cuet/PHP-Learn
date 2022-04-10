<?php
$sample=imagecreatefromjpeg("sample.jpg");
imagejpeg($sample,'upload/output.jpg',90);
?>
<?php

header('Content-type: image/jpeg');

if(isset($_GET['source'])){

	$source = $_GET['source'];
	
	$watermark = imagecreatefrompng('C:\xampp\htdocs\practice\gd_library\avi.PNG');
	$watermark_width = imagesx($watermark);
	$watermark_height = imagesy($watermark);

	$image = imagecreatetruecolor($watermark_width, $watermark_height);
	$image = imagecreatefromjpeg($source);
	
	$image_size = getimagesize($source);
	$x = $image_size[0] - $watermark_width - 1000;
	$y = $image_size[0] - $watermark_height- 1000;

imagecopymerge($image, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 30);
imagejpeg($image, $source.'_watermark.JPG');

}

?>



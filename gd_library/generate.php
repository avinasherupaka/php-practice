<?php

header('Content-type: image/jpeg');

require 'conn_config.php';

$query = "SELECT `email` FROM `users` WHERE `username` = 'Avinash' ";

$query_result = mysql_query($query);

$query_num_rows = mysql_num_rows($query_result);

if ($query_num_rows == 1) {

$email = mysql_result($query_result, 0, 'email');

} else if($query_num_rows==0) {

echo 'invalid username';

}


/*if (isset($_GET['email']) && !empty($_GET['email'])) {

$email = $_GET['email'];

}else{

	echo 'Please enter a email adress';
}*/



if(!empty($email)){

//$email = 'someone@something.com';
$email_length = strlen($email);

$font_size = 4;

$image_height = imagefontheight($font_size);
$image_width = imagefontwidth($font_size) * $email_length;

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0,0,0);

imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);
}

?>



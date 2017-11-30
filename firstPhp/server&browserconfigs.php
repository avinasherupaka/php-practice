<?php

//require 'header.inc.php';


require 'conf.inc.php';// the variable are grabbed from this file via require/include !!

//$scriptName = $_SERVER['SCRIPT_NAME'];

//$hostName = $_SERVER['HTTP_HOST'];

echo $scriptName.'<br>'.'<br>';
echo $hostName.'<br>'.'<br>';

 //echo "<img src = '.$images".Avi_CP.JPG."' alt='error'/>";

echo '<img src = "'.$images.'Avi_CP.JPG"/>';// php gd library	



// "<img src='/php_test/image_archive/" . $last_file[0] . "' alt='error'>";




?>
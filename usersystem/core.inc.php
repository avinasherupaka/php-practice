<?php


ob_start();

session_start();

$current_file_loc = $_SERVER['SCRIPT_NAME'];

$http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

//echo $http_referer;

/*if(isset($_POST['referer'])) {
  $http_referer = trim($_POST['referer']);
} elseif (isset($_SERVER['HTTP_REFERER'])) {
  $http_referer = base64_encode($_SERVER['HTTP_REFERER']);
} else {
  $http_referer = "";
}*/

//print_r($_SERVER);

function isuseractive(){

if (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {

return true;

} else {

return true;
}

}

?>
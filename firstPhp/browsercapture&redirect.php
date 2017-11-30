<?php ob_start();?>

<?php

require 'getBrowser.php';

$redirect_to_google = 'https://www.google.com/chrome/browser/desktop/index.html';
$redirect_to_mozilla = 'https://www.mozilla.org/en-US/';
$redirect_to_IE = 'http://windows.microsoft.com/en-us/internet-explorer/download-ie';


$browser=getBrowser();


$redirect = true;


if($redirect == true && isset( $_POST['currentbrowser']) && isset($_POST['futurebrowser']) ){

$currentbrowser = $_POST['currentbrowser'];
$currentbrowser =strtolower($currentbrowser) ;

$futurebrowser = $_POST['futurebrowser'];
$futurebrowser = strtolower($futurebrowser);

echo $futurebrowser;

if($futurebrowser == 'firefox' || $futurebrowser == 'mozilla' || $futurebrowser == ' mozilla firefox'){

header('Location:'.$redirect_to_mozilla);

}else if ($futurebrowser == 'chrome' || $futurebrowser == 'google chrome') {

header('Location:'.$redirect_to_google);

}elseif ($futurebrowser == 'msie' || $futurebrowser == 'ie') {

header('Location:'.$redirect_to_IE);
}else{

	echo 'Please select a valid browser';
}
}

//ob_end_flush();
?>



<!-- <html>

<head>

	<script src = "http://code.jquery.com/jquery-1.8.1.min.js" type="text/javascript"></script>
	<script	src = "myScript.js" type="text/javascript"></script>

</head>

<body> -->


<form action="browsercapture&redirect.php" method="POST">


Current Browser : <br>
	
	<input type="text" name ="currentbrowser" value = "<?php echo htmlspecialchars($browser['name']); ?>"><br><br>



Future Browser : <br>

	<input type="text" name ="futurebrowser"><br><br>


	<input type= "submit" value = "Get me to new Browser">

</form>
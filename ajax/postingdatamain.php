<?php

include 'conn_config.php';


if (isset($_POST['insert_text']) && !empty($_POST['insert_text'])) {

$post_text = $_POST['insert_text'];

$query = " INSERT INTO `users` VALUES ('','".mysql_escape_string($post_text)."','Someone123','Someone@avicorp.com','Someone','OnlyOne') ";


try {

	$query_run =  mysql_query($query);

	
} catch (Exception $e) {


	echo 'Error: '.$e->getMessage();
}

} else {

Echo 'Enter a valid text !';
}


?>
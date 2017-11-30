<?php

include 'conn_config.php';

if (isset($_GET['search_text'])) {

$search_text = $_GET['search_text'];
	
	if (!empty($search_text)) {

$query = "SELECT `firstname`,`lastname` FROM `users` WHERE `firstname` LIKE '".mysql_real_escape_string($search_text)."%'";
$query_run = mysql_query($query);

while ($query_row = mysql_fetch_assoc($query_run)) {

	$firstname = $query_row['firstname'];
	$lastname = $query_row['lastname'];
echo $firstname.' '.$lastname.'<br><br>';
}
	}

}
?>
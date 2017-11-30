<?php


$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '1111';
$mysql_db = 'a_database';	


if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password) || !@mysql_select_db($mysql_db)){

die($conn_error);


}
?>
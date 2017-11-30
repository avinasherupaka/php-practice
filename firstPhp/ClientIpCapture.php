<?php


require 'conf.inc.php';


if(!empty($http_client_ip)){

$ip_address = $http_client_ip;
	

}else if(!empty($http_x_forwarded_for)){
	
$ip_address = $http_x_forwarded_for;


}else {
	
	$ip_address = $remote_addr;

}

echo $ip_address;


?>
<?php


$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '1111';
$mysql_db = 'a_database';	


class ServerException extends Exception{

public function showSpecifics(){

	return 'Could not connect to the server. Error on line'.$this->getLine().' in '.$this->getFile();


}


}
class DatabaseException extends Exception{


	public function showSpecifics(){

	return 'Could not connect to the Database. Error on line'.$this->getLine().' in '.$this->getFile();


}

}



try {


if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password)){

throw new ServerException();

}elseif ( !@mysql_select_db($mysql_db)) {

throw new DatabaseException('Could not connect to the Database');

}
	
} catch (ServerException $e) {

	echo 'Error:'.$e->showSpecifics();
	
}catch (DatabaseException $e) {
	
	echo 'Error:'.$e->showSpecifics();
}




?>
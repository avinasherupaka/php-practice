<?php

$offset = 0;

if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){

$text = $_POST['text'];

$search = $_POST['searchfor'];


$replace = $_POST['replacewith'];


$string_length = strlen($search);



if(!empty($text) && !empty($search) && !empty($replace)){


	while ($strpos = strpos($text, $search, $offset)) {


		$offset = $strpos + $string_length;
		
		$text = substr_replace($text, $replace, $strpos, $string_length);

	}
	
	$actualtime = date('D M Y @ H:i:s',  time());
 	
 	echo  $text.' - text changed @ '.$actualtime; // timestamp function demostration

 	echo '<br>';

 	echo 'You rolled a '.rand(1, 6).' this time.';// rand function demostration
	
}else{

	echo 'Please fill in all the feilds';
}

}



?>

<form action="FirstFile.php" method="POST">

	<textarea name = "text" rows = "6" cols = "30"></textarea><br><br>

Search Word : <br>
	<input type="text" name ="searchfor"><br><br>

Replace With : <br>

	<input type="text" name ="replacewith"><br><br>

	<input type= "submit" value = "Find & Replace">

</form>
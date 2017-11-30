<?php


include 'conn_config.php';

?>


<form action="sql_tutorial.php" method="GET">

<br>
	Choose a food type:

	<select name= "hu">
		
		<option value="h">Healthy</option>
		<option value="u">UnHealthy</option>

	</select><br><br>

<input type="submit" value="Submit">

</form>


<?php


if (isset($_GET['hu']) && !empty($_GET['hu'])) {
 
$hu = strtolower($_GET['hu']); 

$query = "SELECT `food_name`, `calories` FROM `foods` WHERE `healthy(h)_unhealthy(u)` = '".mysql_real_escape_string($hu)."' ORDER BY `id`";


if ($query_run = mysql_query($query)) {// run query


if (mysql_num_rows($query_run) == NULL) {//amount of rows retrned by query

echo 'No records Found';

} else {

while ($query_row = mysql_fetch_assoc($query_run)) {//functions that fetched the result set/array

$food = $query_row['food_name'];
$calories = $query_row['calories'];

if($hu=='h'){

echo 'Healthy foods are:<br>';
echo $food.' has '.$calories.' calories.<br>';	

}else{

echo 'UnHealthy foods are:<br>';
echo $food.' has '.$calories.' calories.<br>';	

}

}
}
}else{

	mysql_error();
}

}else {

echo 'Must be u or h';
}


?>
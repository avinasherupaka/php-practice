<?php

session_start();

if(!isset($_POST['secure'])) {

$_SESSION['secure'] = rand(1000,9999);

} else {

if ($_SESSION['secure'] == $_POST['secure'] ) {

echo 'Input matched, you are not a robot :)';
} else {

echo 'Input not matched, try again :(';
$_SESSION['secure'] = rand(1000,9999);

}

}

?>

<br><br>
<img src="captcha_function.php"/><br><br>

<form action="captcha.php" method="POST">

	Type the value to prove you are not a robot: <input type="text" size="6" name="secure"><br><br>

	<input type="submit" name="Submit">

</form>
	
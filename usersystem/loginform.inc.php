<?php

require 'conn_config.php';
require 'core.inc.php';
if (isset($_POST['username']) && isset($_POST['password'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$password_hash = md5($password);


if (!empty($username) && !empty($password)) {

$query = "SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password_hash'";

if ($query_result = mysql_query($query)) {


$query_num_rows = mysql_num_rows($query_result);

if ($query_num_rows == 1) {

$userid = mysql_result($query_result, 0, 'id');
$_SESSION['userid'] = $userid;
header('Location: main_login.php');

} else if($query_num_rows==0) {

echo 'invalid username/password combination';

}


} else {

echo mysql_error();

}

} else {

echo 'Please enter username and passord';

}
} 


?>


<form action="<?php echo $current_file_loc; ?>" method="POST">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" value="Login">

</form>
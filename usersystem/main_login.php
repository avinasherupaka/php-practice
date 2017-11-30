<?php

require 'core.inc.php';
require 'conn_config.php';

//error_reporting(E_ALL);

if (isuseractive()) {

echo 'You\'re logged in !!. <a href="logout.php">Log Out</a>';

} else {

include 'loginform.inc.php';

}



?>
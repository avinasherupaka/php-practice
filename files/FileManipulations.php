<?php

include 'count.php';

if(isset($_POST['name'])){

hit_count(); // Calling hit_count function from count.php which caculated the hits for page

$name = $_POST['name'];

if (!empty($name)) {


$handle = fopen('names.txt', 'a');
$names1 = 'names1.txt';
$handle1 = fopen($names1,'a');


fwrite($handle, $name."\r\n");

$count = 1;
//echo 'Names in current file : ';
$read_in = file('names.txt');
$read_count = count($read_in);

foreach ($read_in as $fname) {

	$read_in_names1 = file($names1);

if (!in_array($fname, $read_in_names1)) { // add only is there is no such name
	
	fwrite($handle1, trim($fname));

	if ($count<$read_count) {

		fwrite($handle1, ', ');
	}
	$count++;
	}
}

$handle2 = fopen($names1, 'r');

$data_in = fread($handle2, filesize($names1));

$names_array = explode(',', $data_in);

$namesFileViaExplode = 'namesFileViaExplode.txt';

foreach ($names_array as $name) {

/*$handleForExplodeFile = fopen($namesFileViaExplode, 'r');
$read_in_namesFileviaExplode = file($namesFileViaExplode);

if (!in_array($name, $read_in_namesFileviaExplode)) {*/

$handle3 = fopen($namesFileViaExplode, 'a');
fwrite($handle3, trim($name)."\r\n");
fclose($handle3);

}


//rename($namesFileViaExplode, 'namesFileViaExplodeAfterRename.txt'); //rename function
//unlink($names1);//deleting a file



fclose($handle1);
fclose($handle);


}else{

	echo "Please type a Name";
}

}

?>

<html>
<head>
<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}

</script>
</head>

<body>
<form action="FileManipulations.php" method="POST" enctype="multipart/form-data">


Enter Name  : <br>
	
	<input type="text" name ="name"><br><br>



Want to input a file :
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"><br><br>


    <div id="ifYes" style="display:none">
       <input type="file" name="file" value="file"><br><br>
    </div>


E-mail:
  <input type="email" name="email"><br><br>

<!-- <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male -->

	<input type= "submit" value = "Submit">

</form>
</body>
</html>
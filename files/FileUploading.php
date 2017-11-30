<?php


/*code for file uploading Start*/

if (isset($_POST['yesno']) && isset($_POST['submit']) && isset($_FILES['file']['name'])) {

$uploadingFileName = $_FILES['file']['name'];

$fileextension = strtolower(substr($uploadingFileName, (strpos($uploadingFileName, '.')+1)));

$uploadingFileSize = $_FILES['file']['size'];
//$max_file_size = 20000;
$uploadingFiletype = $_FILES['file']['type'];

$uploadingFile_tmp_name = $_FILES['file']['tmp_name'];

$error = $_FILES['file']['error'];

/*mail configuration start*/

$to = (string)$_POST['email'];
$subject = 'Test Email Via php';
$body = 'This is a test email sent after succesfull file uploading\n\nThanks for using AVICORP !!';
$headers = 'From: aerupaka@gmail.com';

/*mail configuration end*/


if (isset($uploadingFileName)) {

$uploadLocation = 'uploads/';

if ($fileextension == 'jpg') {

if (move_uploaded_file($uploadingFile_tmp_name, $uploadLocation.$uploadingFileName) && $error == 0) {

if (mail('<'.$to.'>', $subject, $body,'<'.$headers.'>')) {


echo 'uploaded and Email conformation sent to '.$to;

}
} else {

echo 'Error uploading !! :( . Check the error code '.$error;
}
}
else {
	
	echo 'Please select a file type of '.$fileextension;
}


} else {

echo 'Please choose a file';	

}

}

/*code for file uploading End*/


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
<form action="FileUploading.php" method="POST" enctype="multipart/form-data">


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

	<input type= "submit" name="submit" value = "Submit">

</form>
</body>
</html>
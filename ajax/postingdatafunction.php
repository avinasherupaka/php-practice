<html>


<head>
	<script type="text/javascript">


function insert(){

	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else {

		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}


xmlhttp.onreadystatechange = function(){


	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

document.getElementById('message').innerHTML = xmlhttp.responseText;

	}
	}

	paramater = 'insert_text='+document.getElementById('insert_text').value;
	xmlhttp.open('POST', 'postingdatamain.php', true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(paramater);
}


	</script>

</head>

<body>

<form id="post" name="post">

<br><br>
Type the Name:<br><br>
<input type= "text" id="insert_text" ><br><br>
<input type="button" value="Submit" onclick="insert();">
<br>
<br>


<div id="message"></div>

</form>
</body>

</html>
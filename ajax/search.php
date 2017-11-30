<html>


<head>
	<script type="text/javascript">


function findmatch(){

	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else {

		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}


xmlhttp.onreadystatechange = function(){


	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

document.getElementById('results').innerHTML = xmlhttp.responseText;

	}
	}

	xmlhttp.open('GET', 'AutoSuggest.php?search_text='+document.search.search_text.value, true);
	xmlhttp.send();
}
	</script>


</head>

<body>
	<form id="search" name="search">
Type the Name:
<input type= "text" name="search_text" onkeyup = "findmatch();"><br>
<br>
<div id = "results"></div>
</form>
</body>

</html>
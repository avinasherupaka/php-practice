<?php


function hit_count(){


	$filename = 'count.txt';

	$handle = fopen($filename, 'r');
	$current_count = fread($handle, filesize($filename));
	fclose($handle);

//echo $current_count;

	$upated_count = $current_count + 1;
	$handle = fopen($filename, 'w');
	fwrite($handle, $upated_count);
	fclose($handle);


}

?>
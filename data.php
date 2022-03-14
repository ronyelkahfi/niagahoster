<?php
function currency_id($curr){
	return number_format($curr,0,",",".");
}
$filePath = "data".DIRECTORY_SEPARATOR."product.json";
$myfile = fopen( $filePath , "r") or die("Unable to open file!");
$productJson =  fread($myfile,filesize($filePath));
fclose($myfile);
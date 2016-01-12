<?php 
header('Content-Type: image/jpeg');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Rafa&euml;l De Jongh"/>
<meta name="description" content="Header Image"/>
<title>Header Image</title>
<style>
*{margin:0;padding:0;}
#logo{max-height:20%;position:absolute;left:2%;top:0; opacity:.75;}
header {
	width:100%;
	height:520px;
	background-image: url("<?php
		$directory = "images/";
		$images = glob($directory . "*.jpg");
		$header = array();
		foreach($images as $image){
		  $header[] = $image;
		}
		$randomimg=array_rand($header);
		echo $header[$randomimg];
	?>");
	background-size:cover;
	background-position: center 30%;
}
</style>
</head>
<body>
<header>
<img id="logo" src="images/logo.png" alt="Rafael De Jongh">
</header>
</body>
</html>

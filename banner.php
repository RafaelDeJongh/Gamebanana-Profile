<?php 
/*header('Content-Type: image/jpeg');*/
$directory = "images/";
$images = glob($directory . "*.jpg");
$header = array();
foreach($images as $image){$header[] = $image;}
$randomimg=array_rand($header);
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
*{margin:0;padding:0;}
#logo{max-height:20%;position:absolute;left:2%;top:0; opacity:.75;}
header {
	width:100%;
	height:520px;
	background-image: url("<?php echo $header[$randomimg];?>");
	background-size:cover;
	background-position:center 30%;
}
</style>
</head>
<body>
<header>
	<img id="logo" src="images/logo.png" alt="Rafael De Jongh">
</header>
</body>
</html>

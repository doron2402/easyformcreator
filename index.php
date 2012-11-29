<?php

/*
	Easy Form Creator

	Form:
	Title
	File upload, 
*/

$Site = array("Title" => 'Easy Form Creator','Headline' => 'Easy Form Creator');

?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  // Handler for .ready() called.
});
</script>
<title><?=$Site['Title'];?></title>
</head>
<body>
<div id="Wrap">
	<div id="Content">
		<div id="header">
			<h1><?=$Site['Headline'];?></h1>
		</div>
		<div id="mainbody">
		
		</div>
		<div id="footer"></div>
	</div>
</div>
</body>
</html>
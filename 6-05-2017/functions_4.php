<!DOCTYPE html>
<html>
<head>
	<title>scope of the variable</title>
</head>
<body>
<?php

// use global keyw
	$msg = "hellow";
	function greeting()
	{
		 global $msg;
		$msg = "good morning";
	}
	echo $msg . "<br>";
	greeting();
	echo $msg;
?>
</body>
</html>
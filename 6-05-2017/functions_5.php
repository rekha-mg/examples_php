<!DOCTYPE html>
<html>
<head>
	<title>passing values in a query string</title>
</head>
<body>
<?php

$name = "vikas";
$age = 56;
$email = "vikas@vikas.com";

$str = "name={$name}&age={$age}&email={$email}";
	
?>
<a href="destination.php?<?php echo $str; ?>"> destination</a>
</body>
</html>
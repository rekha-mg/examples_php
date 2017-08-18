<!DOCTYPE html>
<html>
<head>
	<title>passing values in a query string</title>
</head>
<body>
<?php

$name = "vikas & bahubali";
	
?>
<a href="destination_1.php?name=<?php echo urlencode($name); ?>"> destination</a>
</body>
</html>
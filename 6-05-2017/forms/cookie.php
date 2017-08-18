<!DOCTYPE html>
<html>
<head>
	<title>cookies</title>
</head>
<body>
<?php
$name = "php";
$value = "Rekha";
$expire = time() + 60*60*24*7;

setcookie($name, $value, $expire);
?>
</a>

</body>
</html>
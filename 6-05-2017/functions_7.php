<!DOCTYPE html>
<html>
<head>
	<title>html encoding</title>
</head>
<body>

<a href="http://www.google.com">
	<?php
 $str = "<click here>";
 echo htmlspecialchars($str);


?>
<!-- <click here> -->
</a>

</body>
</html>
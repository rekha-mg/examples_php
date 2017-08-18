<!DOCTYPE html>
<html>
<head>
	<title>functions 2</title>
</head>
<body>
<?php
	
	function power($power , $name, $array)
	{
		echo "2 to the power of {$power} is ". pow(2, $power). "<br/>";
		echo "my name is ". $name . "<br />";
		print_r($array);
		
	}
	$array = [0, 1, 2];
	power(8, "vikas", $array);
?>
</body>
</html>
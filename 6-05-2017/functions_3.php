<!DOCTYPE html>
<html>
<head>
	<title>rreturning the values for functions</title>
</head>
<body>
<?php
	
	function division($dividend , $divisor)
	{
		$quotient = round($dividend/$divisor, 1);
		$remainder = $dividend%$divisor;
		return array($quotient, $remainder);
		echo "heloow world";
	}
	$my_arr = division(63, 5);
	echo "the quotient is " . $my_arr[0]. "<br />" ;
	echo "the remainder is " . $my_arr[1]. "<br />" ;
?>
</body>
</html>
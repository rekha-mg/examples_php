
<?php
     function hello_world($name = "cirt"){
	// function hello_world(){
		echo "hello world <br/>" ;
		echo $name . "<br />";
	}

	hello_world("joker");

	function power($power)
	{
		echo "2 to the power of {$power} is ". pow(2, $power);
	}
	power(8);

?>

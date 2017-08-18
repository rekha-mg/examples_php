<?php
$host = "localhost";
$dbuser = "root";
$pass = "";
$dbname = "student";
$conn = mysqli_connect($host, $dbuser, $pass, $dbname);
if(mysqli_connect_errno()){
	die("connection Failed". mysqli_conncet_error());
}else {
	echo "connected to database {$dbname}";
}
?>
<html>
<head>
<title>Database connection</title>
</head>
<body>
</body>
</html>
<?php
 mysqli_close($conn);
?>
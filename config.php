<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','REKHA');

$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($link===false)
{
    die("Error :Not connected" .mysqli_connect_error());

}
else {
    echo("connect successfully...");
}

?>

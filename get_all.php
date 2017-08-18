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
//$result = mysqli_query($con,"SELECT `note` FROM `glogin_users` WHERE email = '$email'");

  
  
$sql = 'SELECT * FROM quiz';  
$retval=mysqli_query($link, $sql);  
  
  
$rows = array();



if(mysqli_num_rows($retval) > 0){  
 while($r = mysqli_fetch_assoc($retval)) {
    $rows[] = $r;
}
header('Content-Type: application/json');
echo json_encode($rows);
 
  //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>  
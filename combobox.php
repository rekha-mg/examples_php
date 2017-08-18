<?php

require_once 'config.php';

mysql_select_db('rekha',$connection);

$sql="select uname from master";
$result=mysql_query($sql,$connection);


?>

<html>
<head>

</head>
<body>
<select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>


  
</body>
</html>


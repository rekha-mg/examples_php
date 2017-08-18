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
   $sql = 'SELECT ID, NAME, AGE, ADDRESS, CLASS, course
      FROM students';

   
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "<br>";
      echo " ID :{$row['ID']}  <br> ".
         "NAME: {$row['NAME']} <br> ".
         "AGE: {$row['AGE']} <br> ".
         "ADDRESS : {$row['ADDRESS']} <br> ".
         "CLASS : {$row['CLASS']} <br> ".
         "course : {$row['course']} <br> ".
         "--------------------------------<br>";
         // var_dump($row);
   } 
   echo "Fetched data successfully\n";
   mysqli_close($conn);
?>
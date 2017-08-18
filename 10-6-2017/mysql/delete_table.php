<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "student");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
 $sql = "DROP TABLE collegues";
         
         $retval = mysqli_query( $link, $sql );
         if(! $retval ) {
            die('Could not delete table: ' . mysqli_error());
         }
         echo "Table deleted successfully\n";
         mysqli_close($link);
 
// Close connection
mysqli_close($link);
?>
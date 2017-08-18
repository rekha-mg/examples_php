<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", " ", "Rekha");


echo "<select name='cars'>";
  echo "<option value='volvo'>"Volvo"</option>";
  echo "<option value='saab'>"Saab"</option>";
  echo "<option value='fiat'>"Fiat "</option>";
  echo "<option value='audi'>"Audi"</option>";
echo "</select>";

        
 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM master";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
  
echo "<table border=4>";
            echo "<tr>";
                     echo "<th>Uname</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               echo "<td>" . $row['Uname'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
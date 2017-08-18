<?php

require_once  'config.php';
$Uname=$educ=$res=$pp=$d=" ";


//$pp=$_POST["ppp"];




echo "<br>";
//echo "u scored ".$pp;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$Uname=$_POST['name'];
$educ=$_POST['edu'];
$pp=4;
$d=date("j F Y");
}

$sql = "INSERT INTO quiz (UserName,Education,Scored,dateused) VALUES (?, ?, ?, ?)";
 if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt,"ssss", $param_name, $param_edu, $param_score,$param_d);
            
            // Set parameters
            $param_name = $Uname;
            $param_edu = $educ;
            $param_score = $pp;
            $param_d=$d;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location:simplerr2.html");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
         mysqli_close($link);
echo "thank you";

?>
<?php
require_once'configration.php';


$sql="select * from master ";


if(mysqli_query($link,$sql))
{
    if($res=mysqli_query($link,$sql))
    {
           echo "collected records";
           var data=<? php echo json_encode($res);?>;
           echo .data[0][0];
    }
}
else
{
    echo "Error :could not able to execute sql".mysqli_error($link);
}
mysqli_close($link);

 
?>
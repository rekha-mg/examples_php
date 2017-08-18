<?php
require_once'configration.php';

$usname=$pswrd=$email=" ";

$usname=$_POST['uname'];
$pswrd=$_POST['pswd'];
$email=$_POST['em'];
$num="";
$num=10001;




if($usname && $pswrd && $email ==" " )
{
    echo " data not collected";

}
else
{
$sql="insert into master(Id,Uname,Password,Email) values('$num','$usname','$pswrd','$email')";
}

if(mysqli_query($link,$sql))
{
    echo"records inserted successfully";
    $num++;
}
else
{
    echo "Error :could not able to execute sql".mysqli_error($link);
}
mysqli_close($link);

 
?>
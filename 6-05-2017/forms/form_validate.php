<?php

if(isset($_POST['submit'])){
	$yourname = check_input($_POST['yourname']);
	$email    = check_input($_POST['email']);
	$likeit   = check_input($_POST['likeit']);
	$comments = check_input($_POST['comments']);
}else{
	echo "form is not submitted";
	die();
}

?>
<html>
<body>
Your name is: <?php echo $yourname; ?><br />
Your e-mail: <?php echo $email; ?><br />
<br />
Do you like this website? <?php echo $likeit; ?><br />
<br />
Comments:<br />
<?php echo $comments; ?>
</body>
</html>

<?php
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
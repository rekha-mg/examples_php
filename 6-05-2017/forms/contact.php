<html>
<body>
<form action="form_validate.php" method="post">
<p>Your Name: <input type="text" name="yourname" /><br />
E-mail: <input type="text" name="email" /></p>

<p>Do you like this website?
<input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
<input type="radio" name="likeit" value="No" /> No
<input type="radio" name="likeit" value="Not sure" /> Not sure</p>

<p>Your comments:<br />
<textarea name="comments" rows="10" cols="40"></textarea></p>

<p><input type="submit" name="submit" value="Send it!"></p>
</form>
</body>
</html>
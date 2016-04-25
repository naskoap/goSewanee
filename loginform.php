<!--
  Divine Maloney
  Grayson Ruhl
  Nasko Apostolov

  loginform.html - This is the main file for our project and holds all of our html 
  for our main web page.
-->
<html>
<link rel="stylesheet" type="text/css" href="goSewanee.css">
<body>
	<form action="loginPageMockUp.html">
  		Username:<br>
  		<input type="text" name="username_check" value="">
  		<br>
  		Password:<br>
  		<input type="text" name="password_check" value="">
  		<br><br>
  		<input class = "button button1" type="submit" value="Submit">
	</form>

<?php /*

	$username = "SELECT username FROM users WHERE username = username_check";
	$password = "SELECT password FROM users WHERE password = username_check"
	$UserPassValid = "Your username and password exist in our database."
	$userPassError = "We cannot recognize your username and or password. Please try again."

	if($username == $username_check)
		$check = 1;
	else
		$check = 0;
		
	if($username == $username_check)
		$check++;
		
	if($check == 1)
		echo $UserPassValid;
	else
		echo $UserPassError;
*/
?>

</body>
</html>

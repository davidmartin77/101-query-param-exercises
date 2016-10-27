<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


				
	

	<form id = password>
		<label for='password'> Password     </label>
		<input type='password' name='password' id='password' maxlength="50"/>
		<input type=submit name='Submit' value='Submit'>
	</form>	

	<?php
		if ($_GET["password"]) {
			if ($_GET["password"]=="admin") {
				echo "welcome";
			} else { 
				echo "incorrect password";
			} 
		}	// closing first clause // 
	?>
	
				
</body>
</html>
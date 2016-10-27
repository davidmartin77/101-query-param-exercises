<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form>
<input type="text" name="firstname">< NAME >
</form>

	<?php
	if ($_GET["firstname"]) {

		if ($_GET["firstname"]=="Alex") {
				echo "Hello, Alex. Welcome";
		} else { 
				echo "Welcome to my website";
		}
	}	
			
	?>		

</body>
</html>

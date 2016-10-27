<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		
		if ($_GET["password"]=="admin") {
	?>
			<p>This is some html</p>
	<?php
		} else { 
			echo "incorrect password";	
		}

	?>

</body>
</html>
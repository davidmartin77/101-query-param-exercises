<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form>
Enter the value for A <input type="text" name="A"> 
<input type="radio" name="operator" value="+">+
<input type="radio" name="operator" value="-">-
Enter the value for B<input type="text" name="B"> 
<input type="Submit" value="Calculate total"> 
</form>

<?php 
$firstnumber = $_GET["A"];
$secondnumber = $_GET["B"];

	If ($_GET["operator"]=="+") {
	$total = $firstnumber + $secondnumber;
	} else {
		$total = $firstnumber - $secondnumber;
	}
	echo "Answer = " . $total;
?>

</body>
</html>

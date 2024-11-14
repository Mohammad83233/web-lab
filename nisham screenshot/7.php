<html>
<head>
	<title>Area</title>
</head>
<body>
	<h2>Area of a Triangle</h2>
	<form method="POST">
	<label for="base">enter the base:</label>
	<input type="number" name="base" required>
	<br><br>
	<label for="height">enter the height:</label>
	<input type="number" name="height" required>
	<br><br>
	<button type="submit">AREA</button>
<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$base=$_POST["base"];
		$height=$_POST["height"];
		$circle=0.5*$base*$height;
		echo"area=$circle";
		}
?>
</body>
</html>

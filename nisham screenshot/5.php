<html>
<head>
	<title>check positive,negative,or zero</title>
</head>
<body>
	<h2>check if a number is positive,negative,or zero</h2>
	<form method="POST">
	<label for="num">enter a number:</label>
	<input type="num" name="num" required>
	<button type="submit">check</button>
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$num=$_POST["num"];
		if($num>0){
			$result="the number$num is positive.";
			}
		elseif($num<0){
			$result="the number $num is negative";
			}
		else{
			$result="the number is zero ";
		}
		echo"<p><strong>$result</strong></p>";
		}
		?>
</body>
</html>

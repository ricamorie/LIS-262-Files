<html>
	<head>
		<style>
			p {font-size: 40px;}
		</style>
	</head>

	<body>
		<form method="post" style="font-size: 30px;">
			<fieldset style="width: 50%;">
				<legend>All-in-One Calculator</legend>
				Enter 1st Number : <input type="number" name="n1" style="font-size: 30px" required> <br>
				Enter 2nd Number: <input type="number" name="n2" style="font-size: 30px" required> <br>
				<input type="submit" value="Calculate!">
			</fieldset>
		</form>

		<?php
			$first = $_POST["n1"];
			$second = $_POST["n2"];
			$sum=$first+$second;
			$diff=$first-$second;
			$prod=$first*$second;
			$quo=$first/$second;
			$result= 	"<p><big>The SUM of the numbers: <b> $sum </b></big></p>
						<p><big>The DIFFERENCE of the numbers: <b> $diff </b></big></p>
						<p><big>The PRODUCT of the numbers: <b> $prod </b></big></p>
						<p><big>The QUOTIENT of the numbers: <b> $quo </b></big></p>";
			echo $result;
		?>
	</body>
</html>
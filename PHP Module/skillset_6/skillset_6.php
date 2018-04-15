<html>
	<body>
		<form method="post" style="width: 60%">
			<fieldset>
				<legend>Multiplication Table</legend>
				Enter table height: <input type="number" name="height" required> &nbsp;&nbsp;
				Enter table length: <input type="number" name="length" required> &nbsp;&nbsp;	
				<input type="submit" value="Generate table">
			</fieldset>
		</form>
	<?php 
	$first = $_POST["height"];
	$second = $_POST["length"];

		echo "<table border='1px' style='text-align:center'>";
		for($x = 1; $x <= $first; $x++) {
			echo "<tr style='height:25px; color:black; font-weight:bold;'>";
			for($y = 1; $y <= $second; $y++) {
				$product = $x*$y;
				echo "<td style='width:40px'> $product </td>";
			} echo "</tr>";
		} echo "</table>";
	?>
	</body>
</html>
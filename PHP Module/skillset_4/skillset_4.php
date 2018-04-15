<html>
	<body>
		<form method="post">
			<fieldset>
				<legend>Grade-Rating Conversion</legend>
				Enter your grade here: <input type="number" name="grade" required> <br>
				<i>Enter a grade between 50 & 100.</i> <br>
				<input type="submit" value="Convert!">
			</fieldset>
		</form>
		
		<?php
		$grade = $_POST["grade"];

		if ($grade >= 98 && $grade <= 100) {
			$rate = "Your grade equivalent is: <b>1.00</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 95 && $grade <= 97) {
			$rate = "Your grade equivalent is: <b>1.25</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 92 && $grade <= 94) {
			$rate = "Your grade equivalent is: <b>1.50</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 89 && $grade <= 91) {
			$rate = "Your grade equivalent is: <b>1.75</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 86 && $grade <= 88) {
			$rate = "Your grade equivalent is: <b>2.00</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 83 && $grade <= 85) {
			$rate = "Your grade equivalent is: <b>2.25</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 80 && $grade <= 82) {
			$rate = "Your grade equivalent is: <b>2.50</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 77 && $grade <= 79) {
			$rate = "Your grade equivalent is: <b>2.75</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 75 && $grade <= 76) {
			$rate = "Your grade equivalent is: <b>3.00</b><br><br>You have <b>PASSED</b> the subject.";
		} elseif ($grade >= 50 && $grade <= 74) {
			$rate = "Your grade equivalent is: <b>5.00</b><br><br>Sorry, you have <b>FAILED</b> the subject.";
		} else {
			$rate = "<b>Please input a valid grade.</b>";
		} echo $rate;
		?>
	</body>
</html>
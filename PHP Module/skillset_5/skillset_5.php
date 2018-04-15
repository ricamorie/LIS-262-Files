<html>
	<body style="font-size: 50px">
		<form method="post" style="font-size: 30px; width: 50%">
			<fieldset>
				<legend>Menu Selector</legend>
				Enter a day: <input type="text" name="weekd" required=""> <br>
				<i>Enter any day of the week.</i> <br>
				<input type="submit" value="Surprise Me!">
			</fieldset>
		</form>
	
		<?php 
		$Day = $_POST["weekd"];

		switch ($Day) {
			case "monday":
				echo "Karate Chop <i>for Mondays</i><br><br> Common term: <b>Chop Suey</b> <i>(You'll die to taste this. :D)</i>";
			break;

			case "tuesday":
				echo "Bloody Mary <i>for Tuesdays</i><br><br> Common term: <b>Dinuguang baboy</b> (<i>yes, Mary is a pig</i>)";
			break;

			case "wednesday":
				echo "Mollusks in Palm Milk <i>for Wednesday</i><br><br> Common term: <b>Ginataang Suso</b> <i>(Served with a toothpick, for the mollusks not for your teeth:D)</i>";
			break;

			case "thursday":
				echo "Leftovers <i>for Thursdays</i><br><br> <b>Disclaimer:</b> The only day in the week wherein we don't sell fresh food. :D";
			break;

			case "friday":
				echo "Stir-fried <i>convolvulus</i> seasoned with tamari <i>for Fridays</i><br><br> Common term: <b>Adobong <i>Kangkong</i></b> <i>(For all the haters that think this is classy.)</i>";
			break;

			case "saturday":
				echo "Stakie wakey <i>for Saturday</i><br><br> Common term: <b>Beef Chop</b> <i>(It's like pork chop but with beef)";
			break;

			case "sunday":
				echo "nothing<br><br> <i>(It's our day off)</i>";
			break;

			default:
				echo "Enter a valid day! *facepalm";
			}
		?>
	</body>
</html>

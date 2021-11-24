<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>
	<?php
		//echo "hello world";
		/*
			h:12 hours format
			H:24 hours format
			i:minute
			s:sec
			u:microse
			I:full text for the day
			f:full text for month
			j:day of the month
			s:suffix
			y"year in 4 digit

		*/
			//echo "The time is " . date("h:i:sa");
			//echo date("l")
			echo date("h:i:s:u,F j");
			echo"<br>";
			echo date("h");
			echo"<br>";
			echo date("H");
						echo"<br>";

			echo date("i");//minute
						echo"<br>";

			echo date("F");//month
						echo"<br>";

			echo date("j");//date
						echo"<br>";

			echo date("s");//
						echo"<br>";

			echo date("y");//year
						echo"<br>";

			echo date("H:i:s:F:j:y");
	?>
</body>
</html>
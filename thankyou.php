<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
</head>
<body>
	<h1>Thank You!</h1>
	<?php
		$complete_name = $_POST['complete_name'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$satisfaction_level = $_POST['satisfaction_level'];
		$message = $_POST['message'];

		echo "Received $type message from $complete_name ($email)<br><br>";
		echo "$message<br><br>";
		echo "Satisfaction Level: $satisfaction_level";
	?>
</body>
</html>

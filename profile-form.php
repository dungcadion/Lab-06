<!DOCTYPE html>
<html>
<head>
	<title>Profile Form</title>
</head>
<body>
	<?php
		// define variables and set to empty values
		$name = $email = $phone = "";

		if ($_SERVER["C:\xampp\htdocs\dungca\profile-form.php"] == "POST") {
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["email"]);
			$phone = test_input($_POST["phone"]);
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<h2>Profile Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>

		<label for="phone">Phone:</label>
		<input type="text" name="phone" id="phone" required><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($name != "" && $email != "" && $phone != "") {
			echo "<h2>Your Profile:</h2>";
			echo "Name: $name <br>";
			echo "Email: $email <br>";
			echo "Phone: $phone <br>";
		}
	?>
</body>
</html>
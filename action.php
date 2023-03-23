<!DOCTYPE html>
<html>
<head>
	<title>Reservation Details</title>
</head>
<body>

<h2>Reservation Details</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$guests = $_POST["guests"];
	$occasion = $_POST["occasion"];
	$special_requests = $_POST["special_requests"];

	echo "<p>First Name: " . $fname . "</p>";
	echo "<p>Last Name: " . $lname . "</p>";
	echo "<p>Email: " . $email . "</p>";
	echo "<p>Phone Number: " . $phone . "</p>";
	echo "<p>Date: " . $date . "</p>";
	echo "<p>Time: " . $time . "</p>";
	echo "<p>Number of Guests: " . $guests . "</p>";
	echo "<p>Occasion: " . $occasion . "</p>";
	echo "<p>Special Requests: " . $special_requests . "</p>";
}
?>

</body>
</html>

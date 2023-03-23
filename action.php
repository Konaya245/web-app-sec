<!DOCTYPE html>
<html>
<head>
	<title>Reservation Details</title>
</head>
<body>

<h2>Reservation Details</h2>

<p>First Name: <?php echo $_POST["fname"]; ?></p>
<p>Last Name: <?php echo $_POST["lname"]; ?></p>
<p>Email: <?php echo $_POST["email"]; ?></p>
<p>Phone Number: <?php echo $_POST["phone"]; ?></p>
<p>Date: <?php echo $_POST["date"]; ?></p>
<p>Time: <?php echo $_POST["time"]; ?></p>
<p>Number of Guests: <?php echo $_POST["guests"]; ?></p>
<p>Occasion: <?php echo $_POST["occasion"]; ?></p>
<p>Special Requests: <?php echo $_POST["special_requests"]; ?></p>

</body>
</html>

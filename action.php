<!DOCTYPE html>
<html>
<head>
	<title>Reservation Details</title>
</head>
<body>
<h2>Reservation Details</h2>
<?php
// Validate input fields using regular expressions
$fname_regex = "/^[a-zA-Z ]*$/"; // Only allow letters and spaces
$lname_regex = "/^[a-zA-Z ]*$/"; // Only allow letters and spaces
$email_regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"; // Email format
$phone_regex = "/^\d{10}$/"; // 10 digits phone number format
$date_regex = "/^\d{4}-\d{2}-\d{2}$/"; // yyyy-mm-dd format
$time_regex = "/^([01]\d|2[0-3]):([0-5]\d)$/"; // 24-hour format hh:mm
$guests_regex = "/^[1-9]\d*$/"; // Only allow positive integers
$occasion_regex = "/^[a-zA-Z ]*$/"; // Only allow letters and spaces
$special_requests_regex = "/^[a-zA-Z0-9.,!? ]*$/"; // Only allow letters, numbers, and some punctuation marks

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields
    $fname = test_input($_POST["fname"], $fname_regex);
    $lname = test_input($_POST["lname"], $lname_regex);
    $email = test_input($_POST["email"], $email_regex);
    $phone = test_input($_POST["phone"], $phone_regex);
    $date = test_input($_POST["date"], $date_regex);
    $time = test_input($_POST["time"], $time_regex);
    $guests = test_input($_POST["guests"], $guests_regex);
    $occasion = test_input($_POST["occasion"], $occasion_regex);
    $special_requests = test_input($_POST["special_requests"], $special_requests_regex);

    // Display reservation details
    echo "<p>First Name: $fname</p>";
    echo "<p>Last Name: $lname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone Number: $phone</p>";
    echo "<p>Date: $date</p>";
    echo "<p>Time: $time</p>";
    echo "<p>Number of Guests: $guests</p>";
    echo "<p>Occasion: $occasion</p>";
    echo "<p>Special Requests: $special_requests</p>";
}

// Function to test and sanitize input data
function test_input($data, $regex) {
    $data = trim($data); // Remove whitespace
    $data = stripslashes($data); // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    if (!preg_match($regex, $data)) {
        // Display error message if input data does not match the regex pattern
        echo "<p style='color:red;'>Invalid input data: $data</p>";
        $data = ""; // Set input data to empty string
    }
    return $data;
}
?>
</body>
</html>
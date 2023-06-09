<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


// Check user roles and functions for authorization
$role = $_SESSION["role"];

//authorization logic
if($role === "admin"){
    // Administrator can view, update, and delete
    $canInsertUpdateDelete = true;
    $canView = true;
} elseif ($role === "user"){
    // User can insert, update, and delete their own data
    $canInsertUpdateDelete = true;
    $canView = true;
} elseif ($role === "guest"){
    // Guest can only fill in form not view results after
    $canInsertUpdateDelete = true;
    $canView = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Details Form</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/validation.js"></script>
</head>
<body>
	<h2>A. Student Details</h2>
	<form action="action.php" method="POST" onsubmit="return validateForm()">
		<div class="form-group">
			<label for="name">Name (Legal/Official) :</label>
			<input type="text" id="name" name="name" pattern="[A-Za-z ]+" required>
		</div>
		<div id="nameError" class="error"></div>
		<div class="form-group">
			<label for="matricno">Matric No :</label>
			<input type="text" id="matricno" name="matricno" pattern="[A-Za-z0-9]+" required>
		</div>
		<div id="matricnoError" class="error"></div>
		<div class="form-group">
			<label for="currentaddress">Current Address :</label>
			<input type="text" id="currentaddress" name="currentaddress" required>
		</div>
		<div id="currentaddressError" class="error"></div>
		<div class="form-group">
			<label for="homeaddress">Home Address :</label>
			<input type="text" id="homeaddress" name="homeaddress" required>
		</div>
		<div id="homeaddressError" class="error"></div>
		<div class="form-group">
			<label for="email">Email (Gmail Account) :</label>
			<input type="email" id="email" name="email" required>
		</div>
		<div id="emailError" class="error"></div>
		<div class="form-group">
			<label for="mobilephone">Mobile Phone No :</label>
			<input type="tel" id="mobilephone" name="mobilephone" pattern="[0-9]{10,11}" required>
		</div>
		<div id="mobilephoneError" class="error"></div>
		<div class="form-group">
			<label for="homephone">Home Phone No (Emergency) :</label>
			<input type="tel" id="homephone" name="homephone" pattern="[0-9]{10,11}" required>
		</div>
		<div id="homephoneError" class="error"></div><br>
		<div class="form-group">
			<input type="submit" value="Submit">
		</div>
	</form>
	<a href="logout.php" class="signout">Sign Out of Your Account</a>
</body>
</html>

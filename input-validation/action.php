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

// Define regular expressions for input validation
$nameRegex = "/^[A-Za-z ]+$/";
$matricnoRegex = "/^[A-Za-z0-9]+$/";
$mobilephoneRegex = "/^[0-9]{11}$/";

// Define error messages
$errors = array();
$nameError = "";
$matricnoError = "";
$currentaddressError = "";
$homeaddressError = "";
$emailError = "";
$mobilephoneError = "";
$homephoneError = "";

// Validate input fields
if (!preg_match($nameRegex, $_POST["name"])) {
  $nameError = "Please enter a valid name (only letters and spaces allowed)";
  array_push($errors, $nameError);
}
if (!preg_match($matricnoRegex, $_POST["matricno"])) {
  $matricnoError = "Please enter a valid matric number (only letters and digits allowed)";
  array_push($errors, $matricnoError);
}
if ($_POST["currentaddress"] === "") {
  $currentaddressError = "Please enter your current address";
  array_push($errors, $currentaddressError);
}
if ($_POST["homeaddress"] === "") {
  $homeaddressError = "Please enter your home address";
  array_push($errors, $homeaddressError);
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !strpos($_POST["email"], "@gmail.com")) {
  $emailError = "Please enter a valid Gmail account";
  array_push($errors, $emailError);
}
if (!preg_match($mobilephoneRegex, $_POST["mobilephone"])) {
  $mobilephoneError = "Please enter a valid 11-digit mobile phone number";
  array_push($errors, $mobilephoneError);
}
if (!preg_match($mobilephoneRegex, $_POST["homephone"])) {
  $homephoneError = "Please enter a valid 11-digit home phone number";
  array_push($errors, $homephoneError);
}

// If there are no errors, display the input values
if (count($errors) == 0 && $canView = true) {
  echo "<h2>Student Details</h2>";
  echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
  echo "<p><strong>Matric No:</strong> " . $_POST["matricno"] . "</p>";
  echo "<p><strong>Current Address:</strong> " . $_POST["currentaddress"] . "</p>";
  echo "<p><strong>Home Address:</strong> " . $_POST["homeaddress"] . "</p>";
  echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
  echo "<p><strong>Mobile Phone No:</strong> " . $_POST["mobilephone"] . "</p>";
  echo "<p><strong>Home Phone No:</strong> " . $_POST["homephone"] . "</p>";
}

// For guest can view the form but not output
elseif {$canview = false} {
	echo "<p>You are not authorized to view this page.</p>"
}

// Otherwise, display the error messages
else {
  echo "<h2>Errors:</h2>";
  foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
  }
}
?>

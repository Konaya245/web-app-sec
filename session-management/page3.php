<?php
session_start();
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600000);
echo 'Welcome to page #3<br />';

echo $_SESSION['name']; 
echo date('Y m d H:i:s', $_SESSION['time']);
echo "<br>session_id(): ".session_id();
echo "<br>Cookie 'user' is deleted.<br>";
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.<br>";
} else {
  echo "Cookies are disabled.<br>";
}

echo '<br /><a href="page1.php">page 1</a>';
session_unset(); // remove all stored values in session variables
session_destroy(); // Destroys all data registered to a session
session_write_close(); // End the current session and store session data.
setcookie(session_name(),'',0,'/'); // Send Cookie to client web browser.
//session_regenerate_id(true); // Update the current session id with a newly generated one
?>
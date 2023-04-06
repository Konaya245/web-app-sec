<?php
session_start();

echo 'Welcome to page #3<br />';

echo $_SESSION['name']; 
echo date('Y m d H:i:s', $_SESSION['time']);
echo "<br>session_id(): ".session_id();

echo '<br /><a href="page1.php">page 1</a>';
session_unset(); // remove all stored values in session variables
session_destroy(); // Destroys all data registered to a session
session_write_close(); // End the current session and store session data.
setcookie(session_name(),'',0,'/'); // Send Cookie to client web browser.
session_regenerate_id(true); // Update the current session id with a newly generated one
?>
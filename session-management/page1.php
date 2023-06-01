<?php
session_start();
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
$_SESSION['name'] = 'Ali Bin Abu';
$_SESSION['time'] = time();
echo "<br>session_id(): ".session_id();

// Or maybe pass along the session id, if needed
echo '<br /><a href="page2.php?' . session_id() . '">page 2</a>';
?>

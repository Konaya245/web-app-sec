<?php
session_start();

echo 'Welcome to page 2<br />';
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.<br>";
} else {
  echo "Cookies are disabled.<br>";
}
echo $_SESSION['name']; 
echo date('Y m d H:i:s', $_SESSION['time']);
echo "<br>session_id(): ".session_id();

echo '<br /><a href="page3.php">page 3</a>';
?>
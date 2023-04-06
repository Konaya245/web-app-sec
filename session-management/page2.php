<?php
session_start();

echo 'Welcome to page 2<br />';

echo $_SESSION['name']; 
echo date('Y m d H:i:s', $_SESSION['time']);
echo "<br>session_id(): ".session_id();

echo '<br /><a href="page3.php">page 3</a>';
?>
<?php
session_start();

$_SESSION['name'] = 'Ali Bin Abu';
$_SESSION['time'] = time();
echo "<br>session_id(): ".session_id();

// Or maybe pass along the session id, if needed
echo '<br /><a href="page2.php?' . session_id() . '">page 2</a>';
?>

<?php
session_start();
$_SESSION['test'] = "Session is working!";
echo "Session set. <a href='session_check.php'>Check here</a>";

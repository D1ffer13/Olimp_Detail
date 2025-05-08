<?php
session_start();
echo isset($_SESSION['test']) ? $_SESSION['test'] : "Session is NOT working!";

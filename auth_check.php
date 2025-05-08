<?php
session_start();
header('Content-Type: application/json');

$response = ["logged_in" => false];

if (isset($_SESSION["user_id"])) {
    $response["logged_in"] = true;
    $response["username"] = $_SESSION["user_name"];
}

echo json_encode($response);
?>

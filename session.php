<?php
session_start();

if (!isset($_SESSION['loggedInUser'])) {
    header("Location: admin/login.php");
    exit;
}
require_once 'databaseconnectivity.php';

?>
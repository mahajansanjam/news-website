<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_users";
$base_url= "http://localhost/newsweekwebsite";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
?>
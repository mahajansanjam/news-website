<?php

$emailErr = $selectpolicyErr = "";
$email = $selectpolicy = "";
$isvalid = true;
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $selectpolicy = isset($_POST['privacy']) ? trim($_POST['privacy']) : null;

    $emailErr = "";
    $selectpolicyErr = "";
    $isvalid = true;

    if (empty($email)) {
        $emailErr = "Email is required.";
        $isvalid = false;
    }

    if (empty($selectpolicy)) {
        $selectpolicyErr = "You must accept the Privacy Policy.";
        $isvalid = false;
    }

    if ($isvalid) {
        $sql = "INSERT INTO sub_users (email, privacy) VALUES ('$email', '$selectpolicy')";
        if ($conn->query($sql) === TRUE) {
        }
    }
    $conn->close();
}
?>
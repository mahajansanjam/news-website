<?php
include 'databaseconnectivity.php';
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
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
        $isvalid = false;
    }

    if (empty($selectpolicy)) {
        $selectpolicyErr = "You must accept the Privacy Policy.";
        $isvalid = false;
    }

    if ($isvalid) {
      
        if ($stmt = $conn->prepare("INSERT INTO sub_users (email, privacy) VALUES (?, ?)")) {
            $stmt->bind_param("ss", $email, $selectpolicy);

         
            if ($stmt->execute()) {
               
                echo json_encode(['status' => 'success', 'message' => 'Successfully subscribed!']);
            } else {
               
                echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $stmt->error]);
            }
            $stmt->close();
        } else {
          
            
            echo json_encode(['status' => 'error', 'message' => 'Failed to prepare the query.']);
        }
    } else {
        // Return validation errors
        echo json_encode(['status' => 'error', 'message' => $emailErr . ' ' . $selectpolicyErr]);
    }
}
?>

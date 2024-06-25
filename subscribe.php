<?php
// Include database connection
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize email input
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    // Prepare SQL statement to insert email into database
    $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Thank you for subscribing!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<?php
session_start();
require_once 'db_connection.php';

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {
    // Redirect to sign-in page if not logged in
    header('Location: signin.php');
    exit;
}

// Initialize variables to store user data
$username = $age = $email = $hours_required = '';

// Retrieve user data from the database
$stmt = $conn->prepare("SELECT username, age, email, hours_required FROM users WHERE user_id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($username, $age, $email, $hours_required);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Profile Information -->
    <section class="profile container">
        <h2>User Profile</h2>
        <p>Username: <?php echo $username; ?></p>
        <p>Age: <?php echo $age; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Hours Required: <?php echo $hours_required; ?></p>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Sports World. All rights reserved.</p>
    </footer>
</body>
</html>

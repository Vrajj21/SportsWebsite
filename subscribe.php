<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
        $password = $_POST['password'];

        // Verify the user's password
        $stmt = $mysqli->prepare("SELECT password FROM users WHERE id = ?");
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        // Debug: Output the hashed password from the database
        error_log("Hashed password from DB: " . $hashed_password);
        error_log("Entered password: " . $password);

        if (password_verify($password, $hashed_password)) {
            // Check if the request is for a service or an event
            if (isset($_POST['service'])) {
                $service = $_POST['service'];
                // Insert the subscription
                $stmt = $mysqli->prepare("INSERT INTO subscribers (user_id, service) VALUES (?, ?)");
                $stmt->bind_param('is', $user_id, $service);
                if ($stmt->execute()) {
                    echo "<script>alert('Subscription successful!'); window.location.href='profile.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='profile.php';</script>";
                }
                $stmt->close();
            } elseif (isset($_POST['event'])) {
                $event = $_POST['event'];
                // Insert the event enrollment
                $stmt = $mysqli->prepare("INSERT INTO event_enrollments (user_id, event) VALUES (?, ?)");
                $stmt->bind_param('is', $user_id, $event);
                if ($stmt->execute()) {
                    echo "<script>alert('Event enrollment successful!'); window.location.href='profile.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='profile.php';</script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('Invalid request.'); window.location.href='profile.php';</script>";
            }
        } else {
            // Debug: Password verification failed
            error_log("Password verification failed.");
            echo "<script>alert('Invalid password.'); window.location.href='profile.php';</script>";
        }
    } else {
        echo "<script>alert('User not logged in.'); window.location.href='signin.php';</script>";
    }
}

$mysqli->close();
?>

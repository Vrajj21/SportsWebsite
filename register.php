<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $favorite_sport = $_POST['favorite_sport'];

    $stmt = $mysqli->prepare("INSERT INTO users (username, email, password, favorite_sport) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $username, $email, $password, $favorite_sport);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='signin.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='signup.php';</script>";
    }
    $stmt->close();
}
$mysqli->close();
?>

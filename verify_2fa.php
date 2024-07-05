<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_code = $_POST['verification_code'];

    if ($entered_code == $_SESSION['verification_code']) {
        $_SESSION['loggedin'] = TRUE;
        unset($_SESSION['verification_code']);
        header('Location: profile.php');
        exit;
    } else {
        echo "Invalid verification code.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA Verification - Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section class="verification container">
        <h2>2FA Verification</h2>
        <form method="POST" action="verify_2fa.php">
            <div class="form-group">
                <label for="verification_code">Enter Verification Code:</label>
                <input type="text" id="verification_code" name="verification_code" required>
            </div>
            <input type="submit" value="Verify">
        </form>
    </section>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
</body>
</html>

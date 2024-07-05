<?php
session_start();
require_once 'db_connection.php';

// Initialize variables
$email = $password = "";
$email_err = $password_err = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password
    if (empty($email)) {
        $email_err = "Please enter your email.";
    }

    if (empty($password)) {
        $password_err = "Please enter your password.";
    }

    if (empty($email_err) && empty($password_err)) {
        $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            // Debugging: Output the hashed password and the input password
            echo "Hashed password from DB: $hashed_password<br>";
            echo "Input password: $password<br>";

            if (password_verify($password, $hashed_password)) {
                // Generate 2FA code
                $verification_code = rand(100000, 999999);
                $_SESSION['verification_code'] = $verification_code;
                $_SESSION['user_id'] = $user_id;

                // Send code to user's email
                mail($email, "Your Verification Code", "Your verification code is: $verification_code");

                // Redirect to 2FA verification page
                header('Location: verify_2fa.php');
                exit;
            } else {
                $password_err = "Invalid password.";
            }
        } else {
            $email_err = "No user found with that email.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Sports World Logo">
        </div>
        <?php include 'nav.php'; ?>
    </header>

    <!-- Main Content -->
    <main>
        <section class="signin container">
            <h2>Sign In</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    <span class="error"><?php echo $email_err; ?></span>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <span class="error"><?php echo $password_err; ?></span>
                </div>

                <input type="submit" value="Sign In">
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
</body>
</html>

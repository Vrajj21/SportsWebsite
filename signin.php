<?php
session_start();
require_once 'db_connection.php';

// Initialize variables to store user input and error messages
$username = $password = '';
$username_err = $password_err = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate username
    if (empty(trim($_POST['username']))) {
        $username_err = 'Please enter your username.';
    } else {
        $username = trim($_POST['username']);
    }

    // Validate password
    if (empty(trim($_POST['password']))) {
        $password_err = 'Please enter your password.';
    } else {
        $password = trim($_POST['password']);
    }

    // Check if both username and password are provided
    if (empty($username_err) && empty($password_err)) {
        // Prepare a SELECT statement to retrieve user details
        $sql = "SELECT user_id, username, password FROM users WHERE username = ?";
        
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $username);
            
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();
                
                // Check if username exists, then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($user_id, $username, $hashed_password);
                    
                    if ($stmt->fetch()) {
                        // Verify hashed password
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, start a new session
                            session_regenerate_id();
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['username'] = $username;
                            $_SESSION['user_id'] = $user_id;

                            // Redirect user to profile page
                            header('Location: profile.php');
                            exit;
                        } else {
                            // Display an error message if password is incorrect
                            $password_err = 'The password you entered is incorrect.';
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
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
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="signin.php">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <section class="signin container">
            <h2>Sign In</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                    <span class="error"><?php echo $username_err; ?></span>
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
    <footer>
        <p>&copy; 2024 Sports World. All rights reserved.</p>
    </footer>
</body>
</html>

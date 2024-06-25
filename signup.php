<?php
// Initialize variables to store user input and error messages
$username = $email = $password = $age = $hours_required = '';
$username_err = $email_err = $password_err = $age_err = $hours_required_err = '';

// Include database connection file
require_once 'db_connection.php';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate username
    if (empty(trim($_POST['username']))) {
        $username_err = 'Please enter a username.';
    } else {
        $username = trim($_POST['username']);
    }

    // Validate email
    if (empty(trim($_POST['email']))) {
        $email_err = 'Please enter your email.';
    } elseif (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        $email_err = 'Invalid email format.';
    } else {
        $email = trim($_POST['email']);
    }

    // Validate password
    if (empty(trim($_POST['password']))) {
        $password_err = 'Please enter a password.';
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $password_err = 'Password must have at least 6 characters.';
    } else {
        $password = trim($_POST['password']);
    }

    // Validate age
    if (empty(trim($_POST['age']))) {
        $age_err = 'Please enter your age.';
    } elseif (!is_numeric(trim($_POST['age']))) {
        $age_err = 'Age must be a number.';
    } else {
        $age = intval(trim($_POST['age']));
    }

    // Validate hours required (assuming it's numeric)
    if (empty(trim($_POST['hours_required']))) {
        $hours_required_err = 'Please enter the hours required.';
    } elseif (!is_numeric(trim($_POST['hours_required']))) {
        $hours_required_err = 'Hours must be a number.';
    } else {
        $hours_required = intval(trim($_POST['hours_required']));
    }

    // If there are no errors, insert data into the database
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($age_err) && empty($hours_required_err)) {
        // Prepare SQL statement
        $sql = "INSERT INTO users (username, email, password, age, hours_required) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Bind parameters
            $stmt->bind_param("sssis", $username, $email, $hashed_password, $age, $hours_required);

            // Execute the statement
            if ($stmt->execute()) {
                // Close statement
                $stmt->close();

                // Close database connection
                $conn->close();

                // JavaScript for pop-up notification
                echo '<script>';
                echo 'alert("Sign-up successful! You will now be redirected to the homepage.");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Error: Unable to prepare statement.";
        }
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Sports World</title>
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
        <section class="signup container">
            <h2>Sign Up for Services</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                    <span class="error"><?php echo $username_err; ?></span>
                </div>

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

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>" required>
                    <span class="error"><?php echo $age_err; ?></span>
                </div>

                <div class="form-group">
                    <label for="hours_required">Hours Needed:</label>
                    <input type="number" id="hours_required" name="hours_required" value="<?php echo htmlspecialchars($hours_required); ?>" required>
                    <span class="error"><?php echo $hours_required_err; ?></span>
                </div>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Sports World. All rights reserved.</p>
    </footer>
</body>
</html>

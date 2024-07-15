<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <script src="signin.js" defer></script>
</head>
<body>
    <header>
        <h1>Sign In to access</h1>
    </header>
    <?php include 'nav.php'; ?>
    <main>
        <form id="signinForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <input type="submit" value="Sign In">
        </form>
        <div id="error" style="color:red;"></div>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

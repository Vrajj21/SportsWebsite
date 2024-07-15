<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js" defer></script>
</head>
<body>
    <header>
        <h1>Sign Up</h1>
    </header>
    <?php include 'nav.php'; ?>
    <main>
        <form id="signupForm" method="post" action="register.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <label for="favorite_sport">Favorite Sport:</label>
            <select id="favorite_sport" name="favorite_sport" required>
                <option value="soccer">Soccer</option>
                <option value="tennis">Tennis</option>
                <option value="basketball">Basketball</option>
            </select>
            <br><br>
            <input type="submit" value="Sign Up">
        </form>
        <div id="error" style="color:red;"></div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

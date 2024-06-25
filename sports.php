<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports - Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .logo img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .sports {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .article {
            flex: 1 1 300px;
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }
        .article img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .article h3 {
            margin-top: 10px;
            font-size: 1.5em;
            color: #333;
        }
        .article a {
            display: block;
            margin-top: 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .article a:hover {
            background-color: #555;
            
        footer {
            background-color: #333333;
            color: #FFFFFF;
            text-align: center;
            padding: 10px 0;
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
        <section class="sports">
            <h2 style="text-align: center;">Featured Sports</h2>
            <article class="article">
                <h3>Soccer</h3>
                <img src="images/soccer.jpg" alt="Soccer">
                <a href="soccer.html">Learn more about Soccer</a>
            </article>
            <article class="article">
                <h3>Basketball</h3>
                <img src="images/basketball.jpg" alt="Basketball">
                <a href="basketball.html">Learn more about Basketball</a>
            </article>
            <article class="article">
                <h3>Tennis</h3>
                <img src="images/tennis.jpg" alt="Tennis">
                <a href="tennis.html">Learn more about Tennis</a>
            </article>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Sports World. All rights reserved.</p>
    </footer>
</body>
</html>

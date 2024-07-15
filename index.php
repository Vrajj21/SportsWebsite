<?php
session_start();
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
       
        <h1>Welcome to </h1>
    </header>
    <?php include 'nav.php'; ?>
    <main>
        <section class="events">
            <h2>Welcome to Your Ultimate Sports Hub</h2>
            <p>Welcome, <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'Guest'; ?>! Dive into the latest sports news, live updates, and expert analysis from around the world.</p>
            <h3>Featured Events</h3>
            <div class="event-item">
                <img src="images/footballworldcup.jpg" alt="Football World Cup">
                <h3>Football World Cup 2024</h3>
                <p>Catch all the live action, scores, and updates.</p>
                <a href="https://www.fifa.com/worldcup/" target="_blank"><button>Learn More</button></a>
            </div>
            <div class="event-item">
                <img src="images/basketball.jpg" alt="NBA Finals">
                <h3>NBA Finals 2024</h3>
                <p>Follow the thrilling journey of the top teams in the league.</p>
                <a href="https://www.nba.com/finals" target="_blank"><button>Learn More</button></a>
            </div>
            <div class="event-item">
                <img src="images/SerenaWilliamsWimbledon.jpg" alt="Wimbledon">
                <h3>Wimbledon 2024</h3>
                <p>Experience the excitement of the Grand Slam tennis tournament.</p>
                <a href="https://www.wimbledon.com" target="_blank"><button>Learn More</button></a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Sports World</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .events {
            width: 80%;
            max-width: 1000px;
            margin: 20px auto;
        }

        .events h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .event-item {
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .event-item:hover {
            transform: scale(1.05);
        }

        .event-item img {
            max-width: 100%;
            border-radius: 5px;
        }

        .event-item h3 {
            margin-top: 10px;
            color: #2c3e50;
        }

        .event-item p {
            margin-bottom: 10px;
            color: #333;
        }

        .event-price {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        
        <h1>Sports World - Events</h1>
        <nav>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="services.php">Services</a>
        <a href="sports.php">Sports</a>
        <a href="events.php">Events</a>
        <a href="analytics.php">Analytics</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="logo">
            <img src="images/logo.png" alt="Sports World Logo" width="150">
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section class="events">
            <h2>Upcoming Events</h2>
            <div class="event-item" id="summer_camp">
                <img src="images/summer_camp.jpg" alt="Summer Sports Camp">
                <h3>Summer Sports Camp</h3>
                <p>Join us for an exciting summer camp filled with various sports activities. Date: July 15th-30th, 2024.</p>
                <span class="event-price">$150</span>
            </div>
            <div class="event-item" id="sports_meet">
                <img src="images/sports_meet.jpg" alt="Annual Sports Meet">
                <h3>Annual Sports Meet</h3>
                <p>Participate in our annual sports meet and showcase your talents. Date: September 10, 2024.</p>
                <span class="event-price">$100</span>
            </div>
            <div class="event-item" id="winter_training">
                <img src="images/winter_training.jpg" alt="Winter Training Sessions">
                <h3>Winter Training Sessions</h3>
                <p>Get ready for the winter season with our specialized training sessions. Date: December 5th-20th, 2024.</p>
                <span class="event-price">$200</span>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <!-- Include footer -->
    <?php include 'footer.php'; ?>
</body>
</html>

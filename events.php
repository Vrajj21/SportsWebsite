<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .events {
            margin: 20px;
        }
        .event-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
        }
        .event-item img {
            max-width: 100%;
            border-radius: 5px;
        }
        .event-item h3 {
            margin-top: 10px;
        }
        .event-item p {
            margin-bottom: 10px;
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
        <section class="events">
            <h2>Events</h2>
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
    <footer>
        <p>&copy; 2024 Sports World. All rights reserved.</p>
    </footer>
</body>
</html>
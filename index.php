<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
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
        <!-- Include navigation bar -->
        <?php include 'nav.php'; ?>
    </header>

    <!-- Main Content -->
    <main>
       <!-- Hero Section -->
       <section class="hero">
           <h1 style="color: black;">Welcome to Sports World</h1>
           <p style="color: black;">Your ultimate destination for all things sports.</p>
       </section>

        <!-- Latest News Section -->
        <section class="latest-news container">
            <h2 class="section-title">Latest News</h2>
            <div class="news-item">
                <img src="images/footballworldcup.jpg" alt="WCTrophy">
                <h3>Italy Wins Football World Cup Championship</h3>
                <p>Summary of the news article to give readers a quick overview of the content...</p>
                <a href="football-world-cup.php">Read more</a>
            </div>
            <div class="news-item">
                <img src="images/SerenaWilliamsWimbledon.jpg" alt="News 2">
                <h3>Title of News Article 2</h3>
                <p>Summary of the news article to give readers a quick overview of the content...</p>
                <a href="serena-williams-wimbledon.php">Read more</a>
            </div>
        </section>

        <!-- Featured Sports Section -->
        <section class="featured-sports container">
            <h2 class="section-title">Featured Sports</h2>
            <div class="sport-item">
                <img src="images/basketball.jpg" alt="Basketball">
                <h3>Basketball</h3>
                <p>Details about basketball, recent highlights, and why it's featured...</p>
                <a href="basketball.php">Learn more</a>
            </div>
            <div class="sport-item">
                <img src="images/tennis.jpg" alt="Tennis">
                <h3>Tennis</h3>
                <p>Details about tennis, recent highlights, and why it's featured...</p>
                <a href="tennis.php">Learn more</a>
            </div>
            <div class="sport-item">
                <img src="images/soccer.jpg" alt="Soccer">
                <h3>Soccer</h3>
                <p>Details about soccer, recent highlights, and why it's featured...</p>
                <a href="soccer.php">Learn more</a>
            </div>
        </section>
        
        <!-- Upcoming Events Section -->
        <section class="upcoming-events container">
            <h2 class="section-title">Upcoming Events</h2>
            <div class="event-item">
                <a href="events.php#summer_camp">
                    <img src="images/summer_camp.jpg" alt="Summer Sports Camp">
                    <h3>Summer Sports Camp</h3>
                    <p>Join us for an exciting summer camp filled with various sports activities. Date: July 15th-30th, 2024.</p>
                    <span>Learn more</span>
                </a>
            </div>
            <div class="event-item">
                <a href="events.php#sports_meet">
                    <img src="images/sports_meet.jpg" alt="Annual Sports Meet">
                    <h3>Annual Sports Meet</h3>
                    <p>Participate in our annual sports meet and showcase your talents. Date: September 10, 2024.</p>
                    <span>Learn more</span>
                </a>
            </div>
            <div class="event-item">
                <a href="events.php#winter_training">
                    <img src="images/winter_training.jpg" alt="Winter Training Sessions">
                    <h3>Winter Training Sessions</h3>
                    <p>Get ready for the winter season with our specialized training sessions. Date: December 5th-20th, 2024.</p>
                    <span>Learn more</span>
                </a>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials container">
            <h2 class="section-title">What Our Users Say</h2>
            <div class="testimonial">
                <p>"Sports World has completely changed how I stay updated with sports news and events. Highly recommended!" - John Doe</p>
            </div>
            <div class="testimonial">
                <p>"The best platform for all sports enthusiasts. From news to events, they have it all!" - Jane Smith</p>
            </div>
        </section>

        <!-- Subscription Section -->
        <section class="subscribe container">
            <h2 class="section-title">Subscribe to Our Newsletter</h2>
            <form action="subscribe.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="submit" value="Subscribe">
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <!-- Include footer -->
    <?php include 'footer.php'; ?>
</body>
</html>

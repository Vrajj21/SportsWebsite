<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: signin.php');
    exit;
}
include 'db_connection.php';

// Fetch user data
$stmt = $mysqli->prepare("SELECT username, email, favorite_sport FROM users WHERE id = ?");
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username, $email, $favorite_sport);
$stmt->fetch();
$stmt->close();

// Fetch user subscriptions
$sub_stmt = $mysqli->prepare("SELECT service FROM subscribers WHERE user_id = ?");
$sub_stmt->bind_param('i', $_SESSION['id']);
$sub_stmt->execute();
$sub_stmt->bind_result($service);
$subscriptions = [];
$totalCost = 0;
$serviceCosts = [
    "Training Programs" => 200,
    "Coaching" => 150,
    "Event Management" => 1000,
    "Physiotherapy" => 75,
    "Nutrition Advice" => 50
];
while ($sub_stmt->fetch()) {
    $subscriptions[] = $service;
    $totalCost += $serviceCosts[$service];
}
$sub_stmt->close();

// Fetch user event enrollments
$event_stmt = $mysqli->prepare("SELECT event FROM event_enrollments WHERE user_id = ?");
$event_stmt->bind_param('i', $_SESSION['id']);
$event_stmt->execute();
$event_stmt->bind_result($event);
$events = [];
while ($event_stmt->fetch()) {
    $events[] = $event;
}
$event_stmt->close();

$eventCosts = [
    "Summer Sports Camp" => 150,
    "Annual Sports Meet" => 100,
    "Winter Training Sessions" => 200
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Your Profile</h1>
    </header>
    <?php include 'nav.php'; ?>
    <main>
        <section class="profile-info">
            <h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
            <p>Favorite Sport: <?php echo htmlspecialchars(ucfirst($favorite_sport)); ?></p>
        </section>
        
        <section class="personalized-content">
            <h3>Personalized Content</h3>
            <p>Here’s what’s happening in the world of <?php echo htmlspecialchars(ucfirst($favorite_sport)); ?>:</p>
            <div id="personalizedContent"></div>
            <p><a href="https://www.example.com/<?php echo htmlspecialchars(strtolower($favorite_sport)); ?>">Check out the latest updates on <?php echo htmlspecialchars($favorite_sport); ?></a></p>
        </section>

        <section class="subscriptions">
            <h3>Your Subscriptions</h3>
            <ul>
                <?php foreach ($subscriptions as $sub): ?>
                    <li><?php echo htmlspecialchars($sub); ?></li>
                <?php endforeach; ?>
            </ul>
            <p><strong>Total Cost: $<?php echo $totalCost; ?></strong></p>
        </section>
        
        <section class="add-services">
            <h3>Add More Services</h3>
            <form action="subscribe.php" method="post">
                <select name="service">
                    <option value="Training Programs">Training Programs - $200 per month</option>
                    <option value="Coaching">Coaching - $150 per session</option>
                    <option value="Event Management">Event Management - $1000 per event</option>
                    <option value="Physiotherapy">Physiotherapy - $75 per session</option>
                    <option value="Nutrition Advice">Nutrition Advice - $50 per consultation</option>
                </select>
                <input type="password" name="password" placeholder="Confirm Password" required>
                <button type="submit">Subscribe</button>
            </form>
        </section>

        <section class="events">
            <h3>Your Enrolled Events</h3>
            <ul>
                <?php foreach ($events as $evt): ?>
                    <li><?php echo htmlspecialchars($evt); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        
        <section class="add-events" style="width: 80%; max-width: 1000px; margin: 20px auto; background-color: #fff; border: 2px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center;">
            <h3 style="text-align: center; color: #2c3e50; margin-bottom: 30px;">Enroll in More Events</h3>
            <form action="subscribe.php" method="post">
                <select name="event">
                    <option value="Summer Sports Camp">Summer Sports Camp - $150</option>
                    <option value="Annual Sports Meet">Annual Sports Meet - $100</option>
                    <option value="Winter Training Sessions">Winter Training Sessions - $200</option>
                </select>
                <input type="password" name="password" placeholder="Confirm Password" required>
                <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-top: 10px;">Enroll</button>
            </form>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

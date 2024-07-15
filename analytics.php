<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: signin.php');
    exit;
}
include 'db_connection.php';

// Fetch some data for the charts (example: number of users and subscriptions)
$userCount = $mysqli->query("SELECT COUNT(*) AS count FROM users")->fetch_assoc()['count'];
$subscriptionCount = $mysqli->query("SELECT COUNT(*) AS count FROM subscribers")->fetch_assoc()['count'];
$eventCount = $mysqli->query("SELECT COUNT(*) AS count FROM event_enrollments")->fetch_assoc()['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Analytics - Sports World</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header>
        <h1>Analytics</h1>
    </header>
    <?php include 'nav.php'; ?>
    <main>
        <section class="analytics">
            <h2>Basic Analytics of how sports world is going on.</h2>
            <div style="width: 50%; margin: auto;">
                <canvas id="userChart"></canvas>
            </div>
            <div>
                <a href="export.php?format=pdf"><button>Export as PDF</button></a>
                <a href="export.php?format=xlsx"><button>Export as Excel</button></a>
            </div>
            <script>
                var ctx = document.getElementById('userChart').getContext('2d');
                var userChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Users', 'Subscriptions', 'Event Enrollments'],
                        datasets: [{
                            label: '# of Records',
                            data: [<?php echo $userCount; ?>, <?php echo $subscriptionCount; ?>, <?php echo $eventCount; ?>],
                            backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                            borderColor: ['rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

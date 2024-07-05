

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Sports World</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
        <section class="services">
            <h2>Services</h2>
            <table>
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Soccer Coaching</td>
                        <td>Professional coaching for all skill levels.</td>
                        <td>$30/hour</td>
                        <td><a href="signup.php?service=Soccer Coaching&price=30">Sign Up</a></td>
                    </tr>
                    <tr>
                        <td>Basketball Training</td>
                        <td>Advanced training sessions for teams and individuals.</td>
                        <td>$50/hour</td>
                        <td><a href="signup.php?service=Basketball Training&price=50">Sign Up</a></td>
                    </tr>
                    <tr>
                        <td>Tennis Lessons</td>
                        <td>Personalized tennis lessons for beginners and pros.</td>
                        <td>$40/hour</td>
                        <td><a href="signup.php?service=Tennis Lessons&price=40">Sign Up</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Footer Section -->
    <!-- Include footer -->
    <?php include 'footer.php'; ?>
</body>
</html>

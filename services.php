<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="background-color: #2c3e50; color: #fff; padding: 10px 0; text-align: center; position: relative; display: flex; align-items: center; justify-content: center;">
        
        <h1 style="margin: 0; font-size: 2em;">Services we offer at </h1>
    </header>
    <?php include 'nav.php'; ?>
    <main style="flex: 1; padding: 20px;">
        <section style="width: 80%; max-width: 1000px; margin: 20px auto; background-color: #fff; border: 2px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center;">
            <h2 style="text-align: center; color: #2c3e50; margin-bottom: 30px;">Our Services at Sports World</h2>
            <p style="text-align: center; color: #2c3e50; margin-bottom: 30px;">Sign in to enroll.</>
            <div style="border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px; text-align: center; transition: transform 0.3s;">
                <h3 style="margin-top: 10px; color: #2c3e50;">Training Programs</h3>
                <p style="margin-bottom: 10px; color: #333;">Our comprehensive training programs are designed for athletes of all levels, from beginners to professionals.</p>
                <form action="subscribe.php" method="post">
                    <input type="hidden" name="service" value="Training Programs">
                    <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-top: 10px;">$200 per month</button>
                </form>
            </div>
            <div style="border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px; text-align: center; transition: transform 0.3s;">
                <h3 style="margin-top: 10px; color: #2c3e50;">Coaching</h3>
                <p style="margin-bottom: 10px; color: #333;">Get personalized coaching from experienced coaches who will help you improve your skills and performance.</p>
                <form action="subscribe.php" method="post">
                    <input type="hidden" name="service" value="Coaching">
                    <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-top: 10px;">$150 per session</button>
                </form>
            </div>
            <div style="border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px; text-align: center; transition: transform 0.3s;">
                <h3 style="margin-top: 10px; color: #2c3e50;">Event Management</h3>
                <p style="margin-bottom: 10px; color: #333;">We provide end-to-end event management services for sports events, ensuring a seamless experience for participants and spectators.</p>
                <form action="subscribe.php" method="post">
                    <input type="hidden" name="service" value="Event Management">
                    <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-top: 10px;">$1000 per event</button>
                </form>
            </div>
            <div style="border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px; text-align: center; transition: transform 0.3s;">
                <h3 style="margin-top: 10px; color: #2c3e50;">Physiotherapy</h3>
                <p style="margin-bottom: 10px; color: #333;">Our physiotherapy services are designed to help athletes recover from injuries and enhance their physical health.</p>
                <form action="subscribe.php" method="post">
                    <input type="hidden" name="service" value="Physiotherapy">
                    <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-top: 10px;">$75 per session</button>
                </form>
            </div>
            <div style="border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px; text-align: center; transition: transform 0.3s;">
                <h3 style="margin-top: 10px; color: #2c3e50;">Nutrition Advice</h3>
                <p style="margin-bottom: 10px; color: #333;">Receive expert nutrition advice to fuel your performance and maintain optimal health.</p>
                <form action="subscribe.php" method="post">
                    <input type="hidden" name="service" value="Nutrition Advice">
                    <button type="submit" style="background-color: #333; color: #fff; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-top: 10px;">$50 per consultation</button>
                </form>
            </div>
        </section>
    </main>
    <footer style="background-color: #2c3e50; color: #fff; text-align: center; padding: 10px 0; width: 100%; position: relative; bottom: 0; left: 0;">
        &copy; 2024 Sports World. All rights reserved.
    </footer>
</body>
</html>

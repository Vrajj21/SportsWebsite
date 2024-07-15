document.addEventListener('DOMContentLoaded', function () {
    const sport = "<?php echo $_SESSION['favorite_sport']; ?>";
    const contentDiv = document.getElementById('personalizedContent');

    let content = '';

    if (sport === 'football') {
        content = `
            <ul>
                <li>Latest Football Match Results: Team A vs. Team B - Score: 2-1</li>
                <li>Upcoming Football Fixtures: Team C vs. Team D</li>
                <li>Expert Analysis: Football tactics and strategies</li>
            </ul>
        `;
    } else if (sport === 'basketball') {
        content = `
            <ul>
                <li>Latest Basketball Match Results: Team E vs. Team F - Score: 102-98</li>
                <li>Upcoming Basketball Fixtures: Team G vs. Team H</li>
                <li>Expert Analysis: Basketball plays and formations</li>
            </ul>
        `;
    } else if (sport === 'tennis') {
        content = `
            <ul>
                <li>Latest Tennis Match Results: Player A vs. Player B - Score: 6-4, 6-4</li>
                <li>Upcoming Tennis Fixtures: Player C vs. Player D</li>
                <li>Expert Analysis: Tennis techniques and tips</li>
            </ul>
        `;
    }

    contentDiv.innerHTML = content;
});

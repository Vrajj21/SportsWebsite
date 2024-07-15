document.addEventListener('DOMContentLoaded', function () {
    const signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', function (event) {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const favoriteSport = document.getElementById('favorite_sport').value;
            const errorDiv = document.getElementById('error');

            if (username.trim() === '' || email.trim() === '' || password.trim() === '' || favoriteSport.trim() === '') {
                errorDiv.textContent = 'All fields are required.';
                event.preventDefault();
            } else {
                errorDiv.textContent = '';
            }
        });
    }

    const signinForm = document.getElementById('signinForm');
    if (signinForm) {
        signinForm.addEventListener('submit', function (event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorDiv = document.getElementById('error');

            if (username.trim() === '' || password.trim() === '') {
                errorDiv.textContent = 'Username and password are required.';
                event.preventDefault();
            } else {
                errorDiv.textContent = '';
            }
        });
    }
});

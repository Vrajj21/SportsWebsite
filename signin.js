document.getElementById('signinForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('authenticate.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if (data.status === 'success') {
            window.location.href = 'profile.php';
        }
    })
    .catch(error => console.error('Error:', error));
});

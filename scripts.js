document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('loadContent').addEventListener('click', loadContent);

    function loadContent() {
        fetch('load_content.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('dynamicContent').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    }
});

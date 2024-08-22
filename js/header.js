
    // JavaScript to load the header.html content
    fetch('header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('').innerHTML = data;
        });
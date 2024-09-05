document.querySelector('.contact-form form').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('../php/send_contact_email.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text())
        .then(data => {
            alert(data); // Display the response message
        }).catch(error => {
        console.error('Error:', error);
    });
});

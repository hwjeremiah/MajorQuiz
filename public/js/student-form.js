document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('studentForm');

    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Remove previous message if exists
        const prevMsg = document.getElementById('formMessage');
        if (prevMsg) prevMsg.remove();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            const msgDiv = document.createElement('div');
            msgDiv.id = 'formMessage';
            msgDiv.style.marginBottom = '10px';
            msgDiv.style.textAlign = 'center';

            if (data.success) {
                msgDiv.style.color = 'green';
                msgDiv.textContent = data.message || 'Student detail entered successfully';
                form.reset();
            } else {
                msgDiv.style.color = 'red';
                msgDiv.textContent = data.message || 'An error occurred';
            }

            form.parentNode.insertBefore(msgDiv, form);
        })
        .catch(() => {
            const msgDiv = document.createElement('div');
            msgDiv.id = 'formMessage';
            msgDiv.style.color = 'red';
            msgDiv.style.marginBottom = '10px';
            msgDiv.style.textAlign = 'center';
            msgDiv.textContent = 'An error occurred while submitting the form.';
            form.parentNode.insertBefore(msgDiv, form);
        });
    });
});

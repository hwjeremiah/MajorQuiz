document.addEventListener('DOMContentLoaded', function () {
    const table = document.querySelector('table');

    table.addEventListener('click', function (e) {
        if (e.target.classList.contains('delete-link')) {
            e.preventDefault();
            const confirmed = confirm('Are you sure you want to delete this student?');
            if (!confirmed) return;

            const url = e.target.href;
            const row = e.target.closest('tr');

            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.remove();
                    alert('Student deleted successfully.');
                } else {
                    alert(data.message || 'Failed to delete student.');
                }
            })
            .catch(() => {
                alert('An error occurred while trying to delete.');
            });
        }
    });
});

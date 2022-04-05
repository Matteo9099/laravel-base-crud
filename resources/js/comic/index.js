var form_delete = document.querySelectorAll('.form-delete');
for (var i = 0; i < form_delete.length; i++) {
    form_delete[i].addEventListener('submit', function(event) {
        event.preventDefault();
        var accept = confirm('Sicuro di voler eliminare definitivamente questo elemento');
        if (accept) {
            window.location.form_delete = event.target.submit();
        }
    });
}
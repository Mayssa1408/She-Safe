jQuery(document).ready(function ($) {
    $('#vote-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: ajax_url, // Utiliser la variable localisée via wp_localize_script
            type: 'POST',
            data: {
                action: 'she_safe_save_vote',
                park_name: $('#park').val(),
            },
            success: function (response) {
                $('#vote-message').html('<div class="alert alert-success">' + response.data + '</div>');
                location.reload(); // Actualiser les résultats
            },
            error: function (response) {
                $('#vote-message').html('<div class="alert alert-danger">' + response.data + '</div>');
            },
        });
    });
});

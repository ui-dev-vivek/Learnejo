$('#contact-form').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Submit-Contact-Us',
        type: 'post',
        data: $('#contact-form').serialize(),
        beforeSend: function () {
            $('.loading').removeClass('d-none');
        },
        success: function (result) {
            if (result) {
                $('.sent-message').removeClass().html('Thanks For Connecting Us.');
            }

        }

    });
});

$('#examination-login').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Examination-Login',
        type: 'post',
        data: $('#examination-login').serialize(),
        beforeSend: function () {
            $('.login-btn').addClass('d-none');
            $('.login-loader').removeClass('d-none');
        },
        success: function (result) {
            $('.login-btn').removeClass('d-none');
            $('.login-loader').addClass('d-none');
            if (result === '1') {
                $('.massage').html("<p class='text-danger'>ID or Password Is Incorrect!</p>");
            } else {
                $('.massage').html("<p class='text-success'>Redirecting....</p>");
                window.location.href = result;
            }

        }
    });
});



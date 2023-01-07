$('#comment-form').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Add-Blog-Comment',
        type: 'post',
        data: $('#comment-form').serialize(),
        beforeSend: function () {
            $('.loading').removeClass('d-none');
            $('.comment-submit-btn').addClass('d-none');
        },
        success: function (result) {
            $('.comment-area').prepend(result);
            $('.loading').addClass('d-none');
            $('.comment-submit-btn').removeClass('d-none');
            $('#comment-form')[0].reset();

        }

    });
});
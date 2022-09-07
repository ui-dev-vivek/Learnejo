function enroll(pramaLink, link, _token) {

    $.ajax({
        url: '/Enroll',
        type: 'post',
        data: {
            "_token": _token,
            'pramaLink': pramaLink
        },
        beforeSend: function () {
            $('.enroll').html('Please Wait.....');

        },
        success: function (result) {
            var newWin = window.open(link, '_blank');
            if (!newWin || newWin.closed || typeof newWin.closed == 'undefined') {
                $('.enroll').html('Your Pop is blocked. Please Allow pop-up.');
                window.location.href = link;
            } else {
                $('.enroll').html("Enroll Now");

            }

        }

    });
}


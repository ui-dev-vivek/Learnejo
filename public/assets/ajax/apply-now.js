function apply(pramaLink, link, _token) {

    $.ajax({
        url: '/Apply',
        type: 'post',
        data: {
            "_token": _token,
            'pramaLink': pramaLink
        },
        beforeSend: function () {
            $('.apply').html('Please Wait.....');

        },
        success: function (result) {
            var newWin = window.open(link, '_blank');
            if (!newWin || newWin.closed || typeof newWin.closed == 'undefined') {
                $('.apply').html('Your Pop is blocked. Please Allow pop-up.');
                window.location.href = link;
            } else {
                $('.apply').html("Apply Now");

            }

        }

    });
}
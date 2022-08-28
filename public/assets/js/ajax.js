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



function joinWhatsapp(_token) {
    $.ajax({
        url: '/Join-Whatsapp',
        type: 'post',
        data: {
            "_token": _token

        },
        beforeSend: function () {

        },
        success: function (result) {
            window.location.href = result;


        }

    });

}




$('#studentLogin').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Student-Login',
        type: 'post',
        data: $('#studentLogin').serialize(),
        beforeSend: function () {
            $('.studentForm').addClass('d-none');
            $('.studentLoginLoader').removeClass('d-none');

        },
        success: function (result) {
            if (result === 'Done') {
                $('#sideDashboard').load('');
            } else {
                $('.studentForm').removeClass('d-none');
                $('.studentLoginLoader').addClass('d-none');
                $('#massage').html("<p class='text-white bg-danger rounded p-2'> " + result + "</p>");

            }

        }

    });
});


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
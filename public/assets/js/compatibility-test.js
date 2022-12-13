$(document).ready(function () {
    setTimeout(function () {
        if ('mediaDevices' in navigator && 'getUserMedia' in navigator.mediaDevices) {
            $('#bcc').addClass('d-none');
            $('.bcc').addClass('text-success');
            $('.chbcc').removeClass('d-none');
        } else {
            $('#bcc').addClass('d-none');
            $('.bcc').addClass('text-danger');
            $('.csbtn').addClass('d-none')

        }

    }, 2000);
    setTimeout(function () {
        $('#dcc').addClass('d-none');
        $('.dcc').addClass('text-success');
        $('.chdcc').removeClass('d-none');
    }, 4000);

    setTimeout(function () {
        var intervalx = setInterval(function () {

            if (navigator.onLine) {
                $('#ncc').addClass('d-none');
                $('.ncc').addClass('text-success');
                $('.chncc').removeClass('d-none');
                $('#progress').html("<p class='text-danger'></p>");
                $(".startBtn").removeClass('d-none');


            } else {
                $('#ncc').removeClass('d-none');
                $('.chncc').addClass('d-none');
                $('.ncc').addClass('text-danger');
                $('#progress').html("<snap class='text-danger'>No Internate Connection! Please Connect To Internate.</snap>");
                $(".startBtn").addClass('d-none');
            }
        }, 3000);

    }, 3000);

});

// armstrong numbers?

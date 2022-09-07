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


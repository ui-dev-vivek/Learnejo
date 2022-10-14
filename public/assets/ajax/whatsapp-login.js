var currentdate = new Date();


function setToken(token) {
    $('.loginLogo').addClass('logoanimate');
    $('#loginBtn').html("<h4>Processing..</4>");
    $.ajax({
        url: '/Whatsapp-set-token',
        type: 'post',
        data: {
            'token': token
        },
        beforeSend: function () {
            $('#loginMassage').append('Authentication Token Generating.<br>');
        },
        success: function (result) {
            if (result == 1) {
                $('#loginMassage').append('Redirect To Whatsapp.<br>');
                $('#loginMassage').append('<span class="text-primary text-end">Send Massage.</span><br>')
                window.location.href = "whatsapp://send?phone=+919335773820&text=#*Welcome To Learnejo!* Login Token: " + token + " Don't Edit *Send Massage.*";
                var intervalId = window.setInterval(function () {
                    $.ajax({
                        url: '/Whatsapp-auth-token',
                        type: 'post',
                        data: {
                            'token': token
                        },
                        success: function (result) {
                            s = result.split('@');
                            if (s[0] == '1') {
                                clearInterval(intervalId)
                                $('#loginMassage').append('Authenticated...<br>');
                                $('.loginLogo').removeClass('logoanimate');
                                $('#loginMassage').html("Welcome  " + s[1]);
                                $('#loginBtn').html("<h4>Learnejo</4>");
                                setTimeout(function () {
                                }, 2000);


                            }
                        }
                    })
                }, 2000);
            } else {
                $('#loginMassage').append('<span class="text-danger">Falied! to Generate Token.</span><br>');

            }
        }

    });

}

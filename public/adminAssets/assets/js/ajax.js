function updateCourses(id, prama_link, _token) {
    $.ajax({
        url: '/Admin/updateCourses',
        type: 'post',
        data: {
            "_token": _token,
            'prama_link': prama_link
        },
        beforeSend: function () {

            $('.tr' + id).addClass('bg-success');
            $('.sid' + id).addClass('fa-spin');
        },
        success: function (result) {
            if (result == 'del') {
                deleteItem(id, _token, 'courses');
            } else {
                // whatsappShare('https://learnejo.com/Courses/' + prama_link);
                $('.tr' + id).removeClass('bg-success');
                $('.view' + id).removeClass('d-none');
                $('.sid' + id).removeClass('fa-spin');
                telegremCourse(id, prama_link, _token, 'Courses');
            }


        }

    });
}

function updateJobs(id, pramaLink, subType, type, _token) {

    $.ajax({
        url: '/Admin/Update-Jobs',
        type: 'post',
        data: {
            "_token": _token,
            'pramaLink': pramaLink,
            'subType': subType,
            "type": type
        },
        beforeSend: function () {

            $('.tr' + id).addClass('bg-success');
            $('.sid' + id).addClass('fa-spin');
        },
        success: function (result) {
            if (result == 'del') {
                deleteItem(id, _token, 'jobs');
            } else {
                whatsappShare('https://learnejo.com/Job-Internships/' + pramaLink);
                $('.tr' + id).removeClass('bg-success');
                $('.view' + id).removeClass('d-none');
                $('.sid' + id).removeClass('fa-spin');
                telegremCourse(id, pramaLink, _token, 'Job-Internships');
            }


        }

    });
}



function telegremCourse(id, pramalink, _token, url) {
    $.ajax({
        url: 'https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage?chat_id=-1001687470466&text=https://learnejo.com/' + url + '/' + pramalink,
        type: 'post',
        data: {
            "_token": _token
        },
        success: function (result) {
            $('.tr' + id).addClass('text-info');
        }

    });

}

function deleteItem(id, _token, tbname) {
    $.ajax({
        url: '/Admin/Delete-Item',
        type: 'post',
        data: {
            "_token": _token,
            'id': id,
            'tbname': tbname
        },
        beforeSend: function () {
            $('.did' + id).addClass('fa-spin');

        },
        success: function (result) {
            $('.tr' + id).addClass('bg-danger').fadeOut(3000);


        }

    });
}




function changeGroupStatus(url, _token, id) {

    $.ajax({
        url: url,
        type: 'post',
        data: {
            "_token": _token,
            'id': id
        },
        beforeSend: function () {

        },
        success: function (result) {
            if (result) {
                window.location.href = "/Admin/Whatsapp";
            }
        }

    });

}

function updateMembers(url, _token, id) {
    var member = $('#memberField' + id).val();

    $.ajax({
        url: url,
        type: 'post',
        data: {
            "_token": _token,
            'id': id,
            'members': member
        },
        beforeSend: function () {

        },
        success: function (result) {

            if (result) {
                window.location.href = "/Admin/Whatsapp";
            }
        }

    });

}
// setInterval(function () {
//     $('#submitnow').click()
// }, 10000);


$('#About-Mock-Test').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/About-Mock-Test',
        type: 'post',
        data: $('#About-Mock-Test').serialize(),
        beforeSend: function () {
            $('.loader').removeClass('d-none');
        },
        success: function (result) {
            if (result == '1') {
                tostfire('success', "Successfuly Updated!");
            } else {
                tostfire('error', "Error On Updating.");
            }
        }

    });
});

$('#updatemockTest').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/Update-Mock-Test',
        type: 'post',
        data: $('#updatemockTest').serialize(),
        success: function (result) {
            if (result == '1') {
                tostfire('success', "Mock Test Successfuly Updated!");
            } else {
                tostfire('error', " Error On Updating Mock Test.");
            }
        }

    });
});
$('#addmockTest').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/Add-Mock-Test',
        type: 'post',
        data: $('#addmockTest').serialize(),
        success: function (result) {
            if (result == '1') {
                tostfire('success', "Mock Test Successful Added!");
            } else {
                tostfire('error', " Error On Adding Mock Test.");
            }
        }

    });
});


$('#addPages').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/Add-Pages',
        type: 'post',
        data: $('#addPages').serialize(),
        success: function (result) {
            if (result != '0') {
                tostfire('success', "Page Successful Added!");
            } else {
                tostfire('error', " Error On Adding Page.");
            }
        }

    });
});

$('#addBlog').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/Add-Blog',
        type: 'post',
        data: $('#addBlog').serialize(),
        success: function (result) {
            if (result != '0') {
                tostfire('success', "Blog: Every Things Updated!");
            } else {
                tostfire('error', " Error On Updating Blog.");
            }
        }

    });
});

$('#addmockTestSubTopic').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/Add-Mock-Test-Sub-Topic',
        type: 'post',
        data: $('#addmockTestSubTopic').serialize(),
        success: function (result) {
            if (result != '0') {
                tostfire('success', "Page Successful Added!");
            } else {
                tostfire('error', " Error On Adding Page.");
            }
        }

    });
});

function getSubTopic(_token) {
    var id = $('#mockTestId').val();
    $.ajax({
        url: '/Admin/Get-Sub-Topic',
        type: 'post',
        data: {
            "_token": _token,
            'id': id
        },
        beforeSend: function () {
            $('.subTopic').html('Plaser Wait ...');
        },
        success: function (result) {
            $('.subTopic').html(result);
        }

    });

}


$('#addmockTestHeading').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        url: '/Admin/Add-Mock-Test-Heading',
        type: 'post',
        data: $('#addmockTestHeading').serialize(),
        success: function (result) {
            if (result != '0') {
                tostfire('success', "Heading Successful Added!");
            } else {
                tostfire('error', " Error On Adding Heading.");
            }
        }

    });
});
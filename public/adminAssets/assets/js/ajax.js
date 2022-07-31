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
                whatsappShare('https://learnejo.com/Courses/' + prama_link);
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


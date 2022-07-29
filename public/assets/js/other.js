var typed = new Typed(".name", {
    strings: [" Learnejo", " Learnejo", " Learnejo", " Learnejo", " Learnejo", "पाठशाला", "पाठशाला"],
    typeSpeed: 80,
    backSpeed: 60,
    loop: true
});
// , " लर्नेजो"
(function () {
    var words = [
        'Python',
        'Java Development',
        'Artificial intelligent',
        'Cyber Security',
        'Git and Github',
        'Facebook Marketing',
        'Facebook Ads',
        'Web Development',
        'C and C++',
        'Cloud Computing',
        'Graphic Design',
        'Accounting & Finance',
        'Data Science',
        'Ethical Hacking',
        'Android',
        'Google Ads',
        'Matching Learning',
        'Personality development',
        'Node and React Js'
    ],
        i = 0;
    setInterval(function () {
        $('#changingword').fadeOut(function () {
            $(this).html(words[i = (i + 1) % words.length]).fadeIn();
        });
    }, 1000);

})();

(function () {
    var words = [
        'Free Courses', 'Job Updates',
        'Free Notes'
    ],
        i = 0;
    setInterval(function () {
        $('#changingwordx').fadeOut(function () {
            $(this).html(words[i = (i + 1) % words.length]).fadeToggle();
        });
    }, 1500);
})();




function syllabusShow() {
    $('#syllabus').fadeToggle().removeClass('d-none');
}

function mcqOnChange(id, value, trueIs) {
    $('.' + id).addClass('disabled');


    if (trueIs == value) {
        $('.option' + value + id).addClass('text-success');
        $('.true' + value + id).removeClass('d-none');

    } else {
        $('.option' + value + id).addClass('text-danger');
        $('.option' + trueIs + id).addClass('text-success');
        $('.false' + value + id).removeClass('d-none');
        $('.true' + trueIs + id).removeClass('d-none');
        $('.' + id).removeClass('d-none').fadeIn();
        $('.showbtn' + id).addClass('d-none');

    }


}

function whatsappShare(massage) {
    var url = "whatsapp://send?phone=+917619876249&text=" + massage;
    window.location.href = url;
}
function telegramShare(pramalink) {
    var url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage?chat_id=-1001687470466&text=https://learnejo.com/Courses/" + pramalink;
    window.location.href = url;
}

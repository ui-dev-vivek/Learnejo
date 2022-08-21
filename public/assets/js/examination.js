$(document).ready(function () {
    setTimeout(function () {
        if ('mediaDevices' in navigator && 'getUserMedia' in navigator.mediaDevices) {
            $('#bcc').addClass('d-none');
            $('.bcc').addClass('text-success');
            $('.chbcc').removeClass('d-none');
        } else {
            $('#bcc').addClass('d-none');
            $('.bcc').addClass('text-danger');

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



var elem = document.documentElement;

/* View in fullscreen */
function openFullscreen() {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
        elem.msRequestFullscreen();
    }
}

/* Close fullscreen */
function closeFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.webkitExitFullscreen) { /* Safari */
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
        document.msExitFullscreen();
    }
}
var counter = 0;

var timeSec = time.split(':');
endcounter = (parseInt(timeSec[0], 10) * 60) + parseInt(timeSec[1], 10)

var intervalx = setInterval(function () {
    counter++;
    var counterxx = ((counter / endcounter) * 100);

    if (counterxx > 50) {
        $('.progress-left .progress-bar').css('transform', 'rotate(0deg)');
        $('.progress-right .progress-bar').css('transform', 'rotate(' + (180 - (3.6 * (counterxx - 50))) + 'deg)');
    } else {
        $('.progress-right .progress-bar').css('transform', 'rotate(180deg)');
        $('.progress-left .progress-bar').css('transform', 'rotate(' + (180 - (3.6 * counterxx)) + 'deg)');
    }



    if (counter == endcounter) {

        // $( ".submit" ).click();
        // $(".next").click();
        clearInterval(intervalx);
        clearInterval(interval);
        $('.timer').html("00:00 <br><span>Time UP</span> ");
    }
}, 1000);


var interval = setInterval(function () {


    var timer = time.split(':');
    //by parsing integer, I avoid all extra string processing
    var minutes = parseInt(timer[0], 10);
    var seconds = parseInt(timer[1], 10);
    --seconds;
    minutes = (seconds < 0) ? --minutes : minutes;
    if (minutes < 0) clearInterval(interval);
    seconds = (seconds < 0) ? 59 : seconds;
    seconds = (seconds < 10) ? '0' + seconds : seconds;
    //minutes = (minutes < 10) ?  minutes : minutes;
    $('.timer').html(minutes + ':' + seconds + '<br><span> Min Left</span>');
    time = minutes + ':' + seconds;
}, 1000);





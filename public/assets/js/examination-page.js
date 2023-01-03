// var counter = 0;
// var timeSec = time.split(':');
// var endcounter = (parseInt(timeSec[0], 10) * 60) + parseInt(timeSec[1], 10)
// var intervalx = setInterval(function () {
//     counter++;
//     var counterxx = ((counter / endcounter) * 100);

//     if (counterxx > 50) {
//         $('.progress-left .progress-bar').css('transform', 'rotate(0deg)');
//         $('.progress-right .progress-bar').css('transform', 'rotate(' + (180 - (3.6 * (counterxx - 50))) + 'deg)');
//     } else {
//         $('.progress-right .progress-bar').css('transform', 'rotate(180deg)');
//         $('.progress-left .progress-bar').css('transform', 'rotate(' + (180 - (3.6 * counterxx)) + 'deg)');
//     }

//     if (counter == endcounter) {
//         clearInterval(intervalx);
//         clearInterval(interval);
//         $('.timer').html("00:00 <br><span>Time UP</span> ");
//     }
// }, 1000);

// var interval = setInterval(function () {
//     var timer = time.split(':');
//     //by parsing integer, I avoid all extra string processing
//     var minutes = parseInt(timer[0], 10);
//     var seconds = parseInt(timer[1], 10);
//     --seconds;
//     minutes = (seconds < 0) ? --minutes : minutes;
//     if (minutes < 0) clearInterval(interval);
//     seconds = (seconds < 0) ? 59 : seconds;
//     seconds = (seconds < 10) ? '0' + seconds : seconds;
//     //minutes = (minutes < 10) ?  minutes : minutes;
//     $('.timer').html(minutes + ':' + seconds + '<br><span> Min Left</span>');
//     time = minutes + ':' + seconds;
// }, 1000);
const error_massage = "";
function keyalert() {

    const Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'warning',
        title: "Don't Press any Meta Keys."
    })
    error_massage += "Presed unwanted Key" + new Date($.now()) + ". \n";
}
document.addEventListener('contextmenu', event => event.preventDefault());

document.addEventListener("keydown", function (event) {
    if (event.ctrlKey) {
        event.preventDefault()
        keyalert();
    }
    if (event.altKey) {
        event.preventDefault()
        keyalert();
    }
    if (event.shiftKey) {
        event.preventDefault()
        keyalert();
    }
    if (event.metaKey) {
        event.preventDefault()
        keyalert();
    }
    if (event.tabKey) {
        event.preventDefault()
        keyalert();
    }
    if (event.keyCode === 122) {
        event.preventDefault()
        keyalert();
    }
    if (event.keyCode === 9) {
        event.preventDefault()
        keyalert();
    }
    if (event.keyCode === 91) {
        event.preventDefault()
        keyalert();
    }
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
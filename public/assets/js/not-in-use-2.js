
// Timer
function next() {
  var counter = 0;
  var end = 30;
  var intervalx = setInterval(function () {
    counter++;
    counterxx = ((end - counter) / end) * 100;
    $('.ss').css('width', counterxx + '%');
    if (counter == 20) {
      $('.ss').css('background-color', 'red');
    }



    // $('.timer').html(5-counter);

    // if(counter > 2 ){
    //     $('.timer').removeClass(text-success);
    //     $('.timer').addClass(text-danger);
    // }

    if (counter == end) {
      $(".submit").click();


    }
  }, 1000);

  var timer2 = "00:30";
  var interval = setInterval(function () {


    var timer = timer2.split(':');
    //by parsing integer, I avoid all extra string processing
    var minutes = parseInt(timer[0], 10);
    var seconds = parseInt(timer[1], 10);
    --seconds;
    minutes = (seconds < 0) ? --minutes : minutes;
    if (minutes < 0) clearInterval(interval);
    seconds = (seconds < 0) ? 59 : seconds;
    seconds = (seconds < 10) ? '0' + seconds : seconds;
    //minutes = (minutes < 10) ?  minutes : minutes;
    $('.timer').html(minutes + ' : ' + seconds + ' min');
    timer2 = minutes + ':' + seconds;
  }, 1000);
}





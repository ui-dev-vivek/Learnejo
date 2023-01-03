function alertxpro(type, massage) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: type,
        title: massage
    })
}

const video = document.getElementById('video');
Promise.all([
    faceapi.nets.tinyFaceDetector.loadFromUri('/faceapi/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/faceapi/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('/faceapi/models'),
    faceapi.nets.faceExpressionNet.loadFromUri('/faceapi/models'),
    faceapi.nets.ageGenderNet.loadFromUri('/faceapi/models')
]).then(startVideo);

function startVideo() {

    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;

    if (navigator.getUserMedia) {
        navigator.getUserMedia({ video: true },
            function (stream) {
                var video = document.querySelector('video');
                video.srcObject = stream;
                video.onloadedmetadata = function (e) {
                    video.play();
                };
            },
            function (err) {
                console.log(err.name);
            }
        );
    } else {
        document.body.innerText = "getUserMedia not supported";
        console.log("getUserMedia not supported");
    }
}
var no = 0;
var a = 0;
video.addEventListener('play', () => {
    const canvas = faceapi.createCanvasFromMedia(video);
    $('.facex').append(canvas);
    // document.body.append(canvas);
    const displaySize = { width: video.width, height: video.height };
    // const displaySize = { width: 400, height: 300 };
    faceapi.matchDimensions(canvas, displaySize);
    setInterval(async () => {
        const predictions = await faceapi
            .detectAllFaces(video, new faceapi.TinyFaceDetectorOptions())
            .withFaceLandmarks()
            .withFaceExpressions()
            .withAgeAndGender();

        const resizedDetections = faceapi.resizeResults(predictions, displaySize);
        canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
        // faceapi.draw.drawDetections(canvas, resizedDetections);
        // faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);
        // const ft = faceapi.draw.drawFaceExpressions(canvas, resizedDetections);
        resizedDetections.forEach(result => {
            const { age, gender, genderProbability } = result;
            new faceapi.draw.DrawTextField(
                [
                    // `${faceapi.round(age, 0)} years`,
                    // `${gender} (${faceapi.round(genderProbability)})`
                ],
                result.detection.box.bottomRight
            ).draw(canvas);
        });
        console.log(predictions.length)
        console.log(ft)
        if (predictions.length > 1) {
            a += 1
            if (a == 35 || a == 0) {
                a = 1;
                alertxpro('error', "Other Face Ditected!")

            }

        }

        if (predictions.length == 0) {
            no += 1;
            if (no == 40) {
                alertxpro('warning', " Face Not Ditected Focuse on Camara.");
                no = 0;

            }
        }


        // if (predictions.length == 1) {
        //     $('#action').html("<span class='text-success h4'>Please Wait..</span>");
        //     no++;
        // } else if (predictions.length == 0) {
        //     $('#action').html("<span class='text-warning h4'>Focuse On Camara..</span>");
        //     no = 0;
        // } else {
        //     $('#action').html("<span class='text-danger h4'>Other Face Ditected..</span>");
        //     error_massage += "Other Face Ditected at " + new Date($.now()) + ". \n";
        //     no = 0;

        // }
        // if (no == 5) {
        //     video.pause();
        //     clearInterval(refreshVideo);
        //     $('#action').html("<span class='text-info h4'>Done!</span>");
        // }
        $('#prediction').html(error_massage);

    }, 100);
});




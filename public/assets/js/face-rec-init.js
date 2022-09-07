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
        faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);
        // faceapi.draw.drawFaceExpressions(canvas, resizedDetections);
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
        if (predictions.length > 1) {
            $('#prediction').append("<small><span class='text-dabger'>Other Face Ditected." + new Date($.now()) + "</small><hr>");
        }
        if (predictions.length == 1) {
            $('#action').html("<span class='text-success h4'>Please Wait..</span>");
            no = 0;
        }

        if (predictions.length == 0) {
            $('#action').html("<span class='text-danger h4'>Focus on camera!</span>");
            if (no == 100) {
                $('#prediction').html("<small><span class='text-dabger'>No Face Ditected." + new Date($.now()) + " count:" + no + "</small><hr>");

            }

            if (no == 300) {
                $('#prediction').html("<small><span class='text-dabger'>Out Of Camara Last Worning." + new Date($.now()) + " count:" + no + "</small><hr>");
            }
            no = no + 1;
        }

    }, 100);
});

function whatsappShare(massage) {
    var url = "whatsapp://send?phone=+917619876249&text=" + massage;
    window.location.href = url;
}
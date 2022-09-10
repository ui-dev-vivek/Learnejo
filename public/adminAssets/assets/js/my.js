function whatsappShare(massage) {
    var url = "whatsapp://send?text=" + massage;
    window.location.href = url;
}
function loginCheck() {
    var formData = $('.loginForm').serialize();
    $.ajax({
        url: 'api/services/LoginService.php?action=checkUser',
        method: 'GET',
        data: formData,
        async: true
    }).done(function (res) {
        console.log(res);
    }).fail(function (xhr) {
        console.log(xhr);
    });
}
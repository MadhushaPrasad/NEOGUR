// function loginCheck() {
//     var formData = $('.loginForm').serialize();
//     $.ajax({
//         url: 'api/services/LoginService.php?action=checkUser',
//         method: 'GET',
//         data: formData,
//         async: true
//     }).done(function (res) {
//         console.log(res);
//     }).fail(function (xhr) {
//         console.log(xhr);
//     });
// }

function loginDashboard() {
    window.location.href = '/NeoGuru/teachersDashboard.html';
}

function registerTeacher() {
    var formData = $('.signUpForm').serialize();
    $.ajax({
        url: "api/services/LoginService.php?action=save",
        method: 'POST',
        data: formData,
        async: true
    }).done(function (res) {
        console.log(res);
    }).fail(function (xhr) {
        console.log(xhr);
    })
}
var signUp = $('#signUp');
var signIn = $('#signIn');
var containerDiv = $('#container');

signUp.click(function () {
    containerDiv.addClass("right-panel-active");
});
signIn.click(function () {
    containerDiv.removeClass("right-panel-active");
});

function forgetPassword(type) {
    var queryString = null;
    if (type === 'student') {
        queryString = "?forgot=" + type;
        window.location.href = "/NeoGuru/forgotPassword.html" + queryString;

    } else if (type === 'teacher') {
        queryString = "?forgot=" + type;
        window.location.href = "/NeoGuru/forgotPassword.html" + queryString;
    }
}

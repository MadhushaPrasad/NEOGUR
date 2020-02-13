function checkTeacherLogin() {
    var email = $('#email').val();
    var password = $('#password').val();
    if (email == "" && password == "") {
        alert("You cant Login without any data enter..!");
    } else {
        var loginForm = $('.loginForm').serialize();

        var jsonConfig = {
            url: '../NeoGuru/api/services/LoginService.php?action=check',
            method: 'GET',
            data: loginForm,
            dataTypes: 'JSON',
            async: true
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res == "true") {
                document.location.href = "../NeoGuru/teachersDashboard.html";
            } else {
                alert("Please enter your correct email or password");
            }
        }).fail(function (xhr) {
            alert(xhr);
        });
    }
}

function addteacher() {
    var loginForm = $('.signUpForm').serialize();
    var jsonConfig = {
        url: '../NeoGuru/api/services/LoginService.php?action=save',
        method: 'POST',
        data: loginForm,
        dataTypes: 'JSON',
        async: true
    };

    $.ajax(jsonConfig).done(function (res) {
        if (res == "1") {
            alert("Teacher Registered");
        } else {
            alert(res);
        }
    }).fail(function (xhr) {
        console.log(xhr);
    });
}